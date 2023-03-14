<?php

$request = $_SERVER['REQUEST_URI'];
// echo $request;
switch ($request) {
    case '/php_oops/admin/' :
        require __DIR__ . '/modules/authentication/login.php';
        break;
    case '/amanda/admin/index' :
        require __DIR__ . '/modules/authentication/login.php';
        break;
    case '/amanda/admin/forget_password' :
        require __DIR__ . '/modules/authentication/forget_password.php';
        break;
    case '/amanda/admin/logout' :
        require __DIR__ . '/modules/authentication/logout.php';
        break;
    case '/amanda/admin/dashboard' :
        require __DIR__ . '/modules/main/dashboard.php';
        break;
    case '/amanda/admin/clients' :
        require __DIR__ . '/modules/users/manage_clients.php';
        break;
    case '/amanda/admin/interpreters' :
        require __DIR__ . '/modules/users/manage_interpreter.php';
        break;
    case '/amanda/admin/jobs' :
        require __DIR__ . '/modules/jobs/manage_jobs.php';
        break;
    case '/amanda/admin/job_assignment' :
        require __DIR__ . '/modules/jobs/job_assignment.php';
        break;
    case '/amanda/admin/job_schedule' :
        require __DIR__ . '/modules/jobs/job_schedule.php';
        break;
    case '/amanda/admin/editJob' :
        require __DIR__ . '/modules/jobs/edit_job.php';
        break;
    case '/amanda/admin/jobDetails' :
        require __DIR__ . '/modules/jobs/job_details.php';
        break;
    case '/amanda/admin/manage_sms' :
        require __DIR__ . '/modules/smsTemplate/manage_sms.php';
        break;
    case '/amanda/admin/addSmsTemplate' :
        require __DIR__ . '/modules/smsTemplate/add_sms_template.php';
        break;
    case '/amanda/admin/editSmsTemplate' :
        require __DIR__ . '/modules/smsTemplate/edit_sms_template.php';
        break;
    case '/amanda/admin/manage_email' :
        require __DIR__ . '/modules/emailTemplate/manage_email.php';
        break;
    case '/amanda/admin/addEmailTemplate' :
        require __DIR__ . '/modules/emailTemplate/add_email_template.php';
        break;
    case '/amanda/admin/editEmailTemplate' :
        require __DIR__ . '/modules/emailTemplate/edit_email_template.php';
        break;
    case '/amanda/admin/settings' :
        require __DIR__ . '/modules/main/settings.php';
        break;
    default:
        http_response_code(404);
        // require __DIR__ . '/views/404.php';
        break;
}

?>