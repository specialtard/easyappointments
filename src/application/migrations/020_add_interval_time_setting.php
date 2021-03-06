<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2018, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.3.0
 * ---------------------------------------------------------------------------- */

class Migration_Add_interval_time_setting extends CI_Migration {
    public function up()
    {
        $this->load->model('settings_model');

        try
        {
            $this->settings_model->get_setting('interval_time');
        }
        catch (Exception $exception)
        {
            $this->settings_model->set_setting('interval_time', '30');
        }
		
    }

    public function down()
    {
        $this->load->model('settings_model');
		$this->settings_model->remove_setting('interval_time');		
    }
}