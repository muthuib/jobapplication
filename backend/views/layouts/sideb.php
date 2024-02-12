<?php

?>

<aside class="shadow">
<?php echo \yii\bootstrap5\Nav::widget([
    'options' => [
    'class' => 'd-flex flex-column nav-pills'
],
'items' => [
   [
    'label' => 'Dashboard',
    'url' => ['/site/index']
   ],
   [
    'label' => 'Important Information',
    'url' => ['/site/information'] 
   ],
   [
    'label' => 'How to apply',
    'url' => ['/information/index'] 
   ],
   [
    'label' => 'Personal Details',
    'url' => ['/personaldetails'] 
   ],
   [
    'label' => 'Education Details',
    'url' => ['/education/index'] 
   ],
   [
    'label' => 'Upload Education Testmonials',
    'url' => ['/testmonial'] 
   ],
   [
    'label' => 'Language Skills',
    'url' => ['/profession/index'] 
   ],
   [
    'label' => 'Employment History',
    'url' => ['/employment/index'] 
   ],[
    'label' => 'Professional Qualification',
    'url' => ['/professional/index'] 
   ],[
    'label' => 'Additional Qualification',
    'url' => ['/products/index'] 
   ],[
    'label' => 'Professional Membership',
    'url' => ['/information/index'] 
   ],[
    'label' => 'Professional Certifications',
    'url' => ['/information/index'] 
   ],[
    'label' => 'Confrences',
    'url' => ['/information/index'] 
   ],[
    'label' => 'Consultancies',
    'url' => ['/information/index'] 
   ],[
    'label' => 'Research',
    'url' => ['/information/index'] 
   ],[
    'label' => 'Publications',
    'url' => ['/information/index'] 
   ],[
    'label' => 'Student Supervision',
    'url' => ['/information/index'] 
   ],[
    'label' => 'Community Engangement',
    'url' => ['/information/index'] 
   ],[
    'label' => 'Referees',
    'url' => ['/information/index'] 
   ],
   [
    'label' => 'Add Testimonials Categories',
    'url' => ['/category/index'] 
   ],[
    'label' => 'Upload Testimonials',
    'url' => ['/testmonialupload/index'] 
   ],[
    'label' => 'View/Delete Testimonials',
    'url' => ['/information/index'] 
   ],[
    'label' => 'View Profile',
    'url' => ['/information/index'] 
   ],[
    'label' => 'Upload full CV',
    'url' => ['/information/index'] 
   ],[
    'label' => 'Additional Interview documents',
    'url' => ['/information/index'] 
   ],[
    'label' => 'interview Outcome',
    'url' => ['/information/index'] 
   ],[
    'label' => 'Change Password',
    'url' => ['/information/index'] 
   ],

   
]

]) ?>
</aside>


'div class' => 'sidebar close',
    'class' => 'logo-details',
    'class' => 'bx bxl-c-plus-plus',
    'class' => 'logo_name'