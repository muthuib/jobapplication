<?php

?>

<aside class="shadow">
<?php echo \yii\bootstrap5\Nav::widget([
//     'options' => [
//     'class' => 'd-flex flex-column nav-pills',
   
   
// ],

// 'items' => [ 
//    [
//     'label' => 'Dashboard', 'class' => 'navbar navbar-dark bg-dark',
//     'url' => ['/site/index'],  'items' => [

//         [
//         'label' => 'Important Information',
//         'url' => ['/site/information'] 
//        ],
//        [
//         'label' => 'How to apply',
//         'url' => ['/information/index'] 
//        ],
//     ]
//      ],

     
//        [
//         'label' => 'View Advertisements',
//         'url' => ['/information/index'] 
//        ],
//      [
//         'label' => 'Profile',
//         'url' => ['/site/information'],
//         // start of child items within the parent profile.
//         'items' => [ 
//    [
//     'label' => 'Personal Details',
//     'url' => ['/personaldetails'] 
//    ],
//    [
//     'label' => 'Education Details',
//     'url' => ['/education/index'] 
//    ],
//    [
//     'label' => 'Upload Education Testmonials',
//     'url' => ['/testmonial'] 
//    ],
//    [
//     'label' => 'Language Skills',
//     'url' => ['/profession/index'] 
//    ],
//    [
//     'label' => 'Employment History',
//     'url' => ['/employment/index'] 
//    ],[
//     'label' => 'Professional Qualification',
//     'url' => ['/professional/index'] 
//    ],[
//     'label' => 'Additional Qualification',
//     'url' => ['/products/index'] 
//    ],[
//     'label' => 'Professional Membership',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'Professional Certifications',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'Confrences',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'Consultancies',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'Research',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'Publications',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'Student Supervision',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'Community Engangement',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'Referees',
//     'url' => ['/information/index'] 
//    ],
//    [
//     'label' => 'Add Testimonials Categories',
//     'url' => ['/category/index'] 
//    ],[
//     'label' => 'Upload Testimonials',
//     'url' => ['/testmonialupload/index'] 
//    ],[
//     'label' => 'View/Delete Testimonials',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'View Profile',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'Upload full CV',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'Additional Interview documents',
//     'url' => ['/information/index'] 
//    ]]],
   
//    //end of Profile's child item
   
//    [
//     'label' => 'Apply for job',
//     'url' => ['/information/index'] 
//    ],
//    [
//     'label' => 'Apply for Internship',
//     'url' => ['/information/index'] 
//    ],
//    [
//     'label' => 'interview Outcome',
//     'url' => ['/information/index'] 
//    ],
//    [
//     'label' => 'Status of My Application(s)',
//     'url' => ['/information/index'] 
//    ],[
//     'label' => 'Change Password',
//     'url' => ['/information/index'] 
//    ],

   
// ]

]) ?>
<ul id="w3" class="d-flex flex-column nav-pills nav"><li class="dropdown nav-item"><a class="dropdown-toggle nav-link show" href="/site/index" data-bs-toggle="dropdown" role="button" aria-expanded="true">Dashboard</a><div id="w4" class="dropdown-menu show" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 42px);"><a class="dropdown-item" href="/site/information">Important Information</a>
<a class="dropdown-item" href="/information/index">How to apply</a></div></li>
<li class="nav-item"><a class="nav-link" href="/information/index">View Advertisements</a></li>
<li class="dropdown nav-item"><a class="dropdown-toggle nav-link" href="/site/information" data-bs-toggle="dropdown" role="button" aria-expanded="false">Profile</a><div id="w5" class="dropdown-menu"><a class="dropdown-item" href="/personaldetails">Personal Details</a>
<a class="dropdown-item" href="/education/index">Education Details</a>
<a class="dropdown-item" href="/testmonial">Upload Education Testmonials</a>
<a class="dropdown-item" href="/profession/index">Language Skills</a>
<a class="dropdown-item" href="/employment/index">Employment History</a>
<a class="dropdown-item" href="/professional/index">Professional Qualification</a>
<a class="dropdown-item" href="/products/index">Additional Qualification</a>
<a class="dropdown-item" href="/information/index">Professional Membership</a>
<a class="dropdown-item" href="/information/index">Professional Certifications</a>
<a class="dropdown-item" href="/information/index">Confrences</a>
<a class="dropdown-item" href="/information/index">Consultancies</a>
<a class="dropdown-item" href="/information/index">Research</a>
<a class="dropdown-item" href="/information/index">Publications</a>
<a class="dropdown-item" href="/information/index">Student Supervision</a>
<a class="dropdown-item" href="/information/index">Community Engangement</a>
<a class="dropdown-item" href="/information/index">Referees</a>
<a class="dropdown-item" href="/category/index">Add Testimonials Categories</a>
<a class="dropdown-item" href="/testmonialupload/index">Upload Testimonials</a>
<a class="dropdown-item" href="/information/index">View/Delete Testimonials</a>
<a class="dropdown-item" href="/information/index">View Profile</a>
<a class="dropdown-item" href="/information/index">Upload full CV</a>
<a class="dropdown-item" href="/information/index">Additional Interview documents</a></div></li>
<li class="nav-item"><a class="nav-link" href="/information/index">Apply for job</a></li>
<li class="nav-item"><a class="nav-link" href="/information/index">Apply for Internship</a></li>
<li class="nav-item"><a class="nav-link" href="/information/index">interview Outcome</a></li>
<li class="nav-item"><a class="nav-link" href="/information/index">Status of My Application(s)</a></li>
<li class="nav-item fa fa-key"><a class="nav-link" href="<?php echo \yii\helpers\Url::to('/information/index', $schema = true) ?>"><i class="fa fa-key" aria-hidden="true"></i>Change Password</a></li></ul>
</aside>

