<?php

// Replace "VendorName" with yours

namespace Opencart\Catalog\Controller\Extension\VendorName\Module;

use Opencart\System\Engine\CatalogComponentAwareTrait;

class MyModule extends \Opencart\System\Engine\Controller {

    // use CatalogComponentAwareTrait;

    /**
     * The default method for displaying the module's frontend page.
     * Called automatically when the module route is accessed.
     */
    public function index(): string {
        // Load language file for translations
        $this->load->language('extension/vendor_name/module/my_module');

        // Load your module's catalog model if it has any frontend-specific database interactions.
        $this->load->model('extension/vendor_name/module/my_module');

        // Retrieve module settings (these settings are configured in the admin panel).
        $status = $this->config->get('my_module_status');

        // Prepare data array for Twig template
        $data = [];

        // Assign data to be passed to the Twig template.
        $data['heading_title'] = $this->language->get('heading_title');
        $data['another_value'] = 'This is another piece of data for the frontend.';
        
        // Output the rendered Twig template for the catalog.
        // The Twig template defines the HTML structure for the module's display on the storefront.
        return $status ? $this->load->view('extension/vendor_name/module/my_module', $data) : '';
    }

    /**
     * Example of an additional method for AJAX calls from the frontend.
     * For instance, if your module needs to fetch data dynamically without a full page reload.
     */
    public function getAjaxData(): void {
        $json = [];

        // Perform some logic, e.g., fetch data from model.
        // $this->load->model('extension/vendor_name/module/my_module');
        // $data_from_model = $this->model_extension_vendor_name_my_module->getAjaxData();

        // Assign data to the JSON response.
        $json['success'] = true;
        $json['message'] = $this->language->get('text_ajax_success');
        // $json['data'] = $data_from_model;

        // Output the JSON response.
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
