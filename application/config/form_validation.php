<?php

defined("BASEPATH") or exit("No direct script access allowed");

$config = array(
    'jobs/create' => array(
        [
            'field' =>  'company',
            'label' =>  'Company',
            'rules' =>  'required', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'job_title',
            'label' =>  'Job_title',
            'rules' =>  'required', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'description',
            'label' =>  'Descrription',
            'rules' =>  'required', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'salary',
            'label' =>  'Salary',
            'rules' =>  'required|numeric', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'location',
            'label' =>  'Location',
            'rules' =>  'required', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'contact_user',
            'label' =>  'Contact_user',
            'rules' =>  'required', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'contact_email',
            'label' =>  'Contact_email',
            'rules' =>  'required', ['required' =>  '%s is required']
        ]
    ),
    'jobs/update' => array(
        [
            'field' =>  'company',
            'label' =>  'Company',
            'rules' =>  'required', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'job_title',
            'label' =>  'Job_title',
            'rules' =>  'required', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'description',
            'label' =>  'Descrription',
            'rules' =>  'required', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'salary',
            'label' =>  'Salary',
            'rules' =>  'required|numeric', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'location',
            'label' =>  'Location',
            'rules' =>  'required', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'contact_user',
            'label' =>  'Contact_user',
            'rules' =>  'required', ['required' =>  '%s is required']
        ],
        [
            'field' =>  'contact_email',
            'label' =>  'Contact_email',
            'rules' =>  'required', ['required' =>  '%s is required']
        ]
    )
);