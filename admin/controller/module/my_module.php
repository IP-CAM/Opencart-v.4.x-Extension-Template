<?php

// Replace "VendorName" with yours

namespace Opencart\Admin\Controller\Extension\VendorName\Module;

class MyModule extends \Opencart\System\Engine\Controller {  

    // use AdminComponentAwareTrait;
    
    /**
     * The default method for displaying the module's administration page.
     * This method is automatically called when the module is accessed in the admin panel.
     * It loads necessary data, sets up the view, and renders the Twig template.
     */
    public function index(): void {
        
        // Load language file for translations
        $this->load->language('extension/vendor_name/module/my_module');

        // Set document title
        $this->document->setTitle($this->language->get('heading_title'));

        // Load model if needed (e.g setting/setting)
        $this->load->model('setting/setting');

        // Access the loaded model (setting/setting) as required
        // Tip: The "AdminComponentAwareTrait" helps with auto-completion, making development flawless
        $this->model_setting_setting;
        
        // Prepare data array for the view template
        $data = [];

        // Retrieve saved settings if needed
        // $data['my_setting'] = $this->config->get('my_setting_key');

        // Load common controllers for header, column_left and footer
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        // Render the view
        $this->response->setOutput(
            $this->load->view('extension/vendor_name/module/my_module', $data)
        );
    }
        
    /**
    * Handles the saving of the module's configuration settings.
    * This method is typically called via an AJAX request from the admin form.
    */
    public function save(): void
    {
        $json = [];

        // Only allow POST requests
        if ($this->request->server['REQUEST_METHOD'] === 'POST') {

            // Validate user permissions
            if (!$this->user->hasPermission('modify', 'extension/vendor_name/module/my_module')) {
                $json['error'] = $this->language->get('error_permission');
            } else {
                // Validate and sanitize inputs as needed here
                // e.g. $setting_value = $this->request->post['setting_key'] ?? null;

                // Save settings using setting model
                $this->load->model('setting/setting');
                $this->model_setting_setting->editSetting('my_module', $this->request->post);

                $json['success'] = $this->language->get('text_success');
            }
        } else {
            $json['error'] = $this->language->get('error_invalid_request');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    /**
    * This method is called during the installation of the extension.
    * Use it to create database tables, add default settings, or perform other setup tasks.
    */
    public function install() {
        // Example: create a custom table

        // $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "my_module_table` (
        //   `id` INT(11) NOT NULL AUTO_INCREMENT,
        //   `name` VARCHAR(255) NOT NULL,
        //   PRIMARY KEY (`id`)
        // ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        // Add default settings if needed

        // $this->load->model('setting/setting');
        // $this->model_setting_setting->editSetting('my_module', ['my_module_status' => 1]);
    }

    /**
     * This method is called during the uninstallation of the extension.
     * Use it to remove database tables, delete settings, or clean up any resources.
     */
    public function uninstall(): void {
        // Example: drop custom table

        // $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "my_module_table`");

        // Remove module settings
        
        // $this->load->model('setting/setting');
        // $this->model_setting_setting->deleteSetting('my_module');
    }
}