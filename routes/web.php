<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AccessController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\ManageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GalleryCategoryController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\NewsletterSubscribeController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\RecycleController;

use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\CompanyServiceController;
use App\Http\Controllers\Website\CourseController;
use App\Http\Controllers\Website\CourseCategoryController;
use App\Http\Controllers\Website\ProcessController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//website routes start
Route::get('/', [WebsiteController::class, 'index']);
Route::get('about', [WebsiteController::class, 'about']);
Route::get('online-registration', [WebsiteController::class, 'online_registration']);

Route::prefix('service/')->group(function () {
  Route::get('', [CompanyServiceController::class, 'index']);
  Route::get('it-certification-training', [CompanyServiceController::class, 'it_certification_training']);
  Route::get('it-audit', [CompanyServiceController::class, 'it_audit']);
  Route::get('security-solutions', [CompanyServiceController::class, 'security_solutions']);
  Route::get('iso-consultancy', [CompanyServiceController::class, 'iso_consultancy']);
  Route::get('software-services', [CompanyServiceController::class, 'software_services']);

  Route::prefix('software/')->group(function () {
    Route::get('mcms', [CompanyServiceController::class, 'mcms']);
    Route::get('crm', [CompanyServiceController::class, 'crm']);
    Route::get('hrm', [CompanyServiceController::class, 'hrm']);
    Route::get('hms', [CompanyServiceController::class, 'hms']);
    Route::get('pms', [CompanyServiceController::class, 'pms']);
    Route::get('rms', [CompanyServiceController::class, 'rms']);
    Route::get('sms', [CompanyServiceController::class, 'sms']);
  });
});

Route::prefix('course/')->group(function () {
  Route::prefix('category/')->group(function () {
    Route::get('', [CourseCategoryController::class, 'index']);
    Route::get('data-center', [CourseCategoryController::class, 'data_center']);
    Route::get('industrial-automation', [CourseCategoryController::class, 'industrial_automation']);
    Route::get('ms-office-application', [CourseCategoryController::class, 'ms_office_application']);
    Route::get('it-security', [CourseCategoryController::class, 'it_security']);
    Route::get('it-audit-standard-governance', [CourseCategoryController::class, 'it_audit_standard_governance']);
    Route::get('server-networking-hardware', [CourseCategoryController::class, 'server_networking_hardware']);
    Route::get('it-service-management', [CourseCategoryController::class, 'it_service_management']);
    Route::get('project-management', [CourseCategoryController::class, 'project_management']);
  });
});

Route::prefix('submit/')->group(function () {
  Route::post('online-registration', [ProcessController::class, 'online_registration']);
  Route::post('guideline', [ProcessController::class, 'guideline']);
});

//admin panel routes start
Route::get('dashboard', [AdminController::class, 'index']);

Route::get('dashboard/account', [AccountController::class, 'index']);
Route::get('dashboard/account/invoice', [AccountController::class, 'invoice']);

Route::get('dashboard/manage', [ManageController::class, 'index']);
Route::get('dashboard/manage/basic', [ManageController::class, 'basic']);
Route::post('dashboard/manage/basic/update', [ManageController::class, 'update_basic']);
Route::get('dashboard/manage/social', [ManageController::class, 'social_media']);
Route::post('dashboard/manage/social/update', [ManageController::class, 'update_social_media']);
Route::get('dashboard/manage/contact', [ManageController::class, 'contact']);
Route::post('dashboard/manage/contact/update', [ManageController::class, 'update_contact']);

Route::get('dashboard/user', [UserController::class, 'index']);
Route::get('dashboard/user/add', [UserController::class, 'add']);
Route::get('dashboard/user/edit/{slug}', [UserController::class, 'edit']);
Route::get('dashboard/user/view/{slug}', [UserController::class, 'view']);
Route::post('dashboard/user/submit', [UserController::class, 'insert']);
Route::post('dashboard/user/update', [UserController::class, 'update']);
Route::post('dashboard/user/softdelete', [UserController::class, 'softdelete']);
Route::post('dashboard/user/restore', [UserController::class, 'restore']);
Route::post('dashboard/user/delete', [UserController::class, 'delete']);

Route::get('dashboard/banner', [BannerController::class, 'index']);
Route::get('dashboard/banner/add', [BannerController::class, 'add']);
Route::get('dashboard/banner/edit/{slug}', [BannerController::class, 'edit']);
Route::get('dashboard/banner/view/{slug}', [BannerController::class, 'view']);
Route::post('dashboard/banner/submit', [BannerController::class, 'insert']);
Route::post('dashboard/banner/update', [BannerController::class, 'update']);
Route::post('dashboard/banner/softdelete', [BannerController::class, 'softdelete']);
Route::post('dashboard/banner/restore', [BannerController::class, 'restore']);
Route::post('dashboard/banner/delete', [BannerController::class, 'delete']);

Route::get('dashboard/page', [PageController::class, 'index']);
Route::get('dashboard/page/add', [PageController::class, 'add']);
Route::get('dashboard/page/edit/{slug}', [PageController::class, 'edit']);
Route::get('dashboard/page/view/{slug}', [PageController::class, 'view']);
Route::post('dashboard/page/submit', [PageController::class, 'insert']);
Route::post('dashboard/page/update', [PageController::class, 'update']);
Route::post('dashboard/page/softdelete', [PageController::class, 'softdelete']);
Route::post('dashboard/page/restore', [PageController::class, 'restore']);
Route::post('dashboard/page/delete', [PageController::class, 'delete']);

Route::get('dashboard/content', [ContentController::class, 'index']);
Route::get('dashboard/content/add', [ContentController::class, 'add']);
Route::get('dashboard/content/edit/{slug}', [ContentController::class, 'edit']);
Route::get('dashboard/content/view/{slug}', [ContentController::class, 'view']);
Route::post('dashboard/content/submit', [ContentController::class, 'insert']);
Route::post('dashboard/content/update', [ContentController::class, 'update']);
Route::post('dashboard/content/softdelete', [ContentController::class, 'softdelete']);
Route::post('dashboard/content/restore', [ContentController::class, 'restore']);
Route::post('dashboard/content/delete', [ContentController::class, 'delete']);

Route::get('dashboard/gallery', [GalleryController::class, 'index']);
Route::get('dashboard/gallery/add', [GalleryController::class, 'add']);
Route::get('dashboard/gallery/edit/{slug}', [GalleryController::class, 'edit']);
Route::get('dashboard/gallery/view/{slug}', [GalleryController::class, 'view']);
Route::post('dashboard/gallery/submit', [GalleryController::class, 'insert']);
Route::post('dashboard/gallery/update', [GalleryController::class, 'update']);
Route::post('dashboard/gallery/softdelete', [GalleryController::class, 'softdelete']);
Route::post('dashboard/gallery/restore', [GalleryController::class, 'restore']);
Route::post('dashboard/gallery/delete', [GalleryController::class, 'delete']);

Route::get('dashboard/gallery/category', [GalleryCategoryController::class, 'index']);
Route::get('dashboard/gallery/category/add', [GalleryCategoryController::class, 'add']);
Route::get('dashboard/gallery/category/edit/{slug}', [GalleryCategoryController::class, 'edit']);
Route::get('dashboard/gallery/category/view/{slug}', [GalleryCategoryController::class, 'view']);
Route::post('dashboard/gallery/category/submit', [GalleryCategoryController::class, 'insert']);
Route::post('dashboard/gallery/category/update', [GalleryCategoryController::class, 'update']);
Route::post('dashboard/gallery/category/softdelete', [GalleryCategoryController::class, 'softdelete']);
Route::post('dashboard/gallery/category/restore', [GalleryCategoryController::class, 'restore']);
Route::post('dashboard/gallery/category/delete', [GalleryCategoryController::class, 'delete']);

Route::get('dashboard/team', [TeamMemberController::class, 'index']);
Route::get('dashboard/team/add', [TeamMemberController::class, 'add']);
Route::get('dashboard/team/edit/{slug}', [TeamMemberController::class, 'edit']);
Route::get('dashboard/team/view/{slug}', [TeamMemberController::class, 'view']);
Route::post('dashboard/team/submit', [TeamMemberController::class, 'insert']);
Route::post('dashboard/team/update', [TeamMemberController::class, 'update']);
Route::post('dashboard/team/softdelete', [TeamMemberController::class, 'softdelete']);
Route::post('dashboard/team/restore', [TeamMemberController::class, 'restore']);
Route::post('dashboard/team/delete', [TeamMemberController::class, 'delete']);

Route::get('dashboard/service', [ServiceController::class, 'index']);
Route::get('dashboard/service/add', [ServiceController::class, 'add']);
Route::get('dashboard/service/edit/{slug}', [ServiceController::class, 'edit']);
Route::get('dashboard/service/view/{slug}', [ServiceController::class, 'view']);
Route::post('dashboard/service/submit', [ServiceController::class, 'insert']);
Route::post('dashboard/service/update', [ServiceController::class, 'update']);
Route::post('dashboard/service/softdelete', [ServiceController::class, 'softdelete']);
Route::post('dashboard/service/restore', [ServiceController::class, 'restore']);
Route::post('dashboard/service/delete', [ServiceController::class, 'delete']);

Route::get('dashboard/project', [ProjectController::class, 'index']);
Route::get('dashboard/project/add', [ProjectController::class, 'add']);
Route::get('dashboard/project/edit/{slug}', [ProjectController::class, 'edit']);
Route::get('dashboard/project/view/{slug}', [ProjectController::class, 'view']);
Route::post('dashboard/project/submit', [ProjectController::class, 'insert']);
Route::post('dashboard/project/update', [ProjectController::class, 'update']);
Route::post('dashboard/project/softdelete', [ProjectController::class, 'softdelete']);
Route::post('dashboard/project/restore', [ProjectController::class, 'restore']);
Route::post('dashboard/project/delete', [ProjectController::class, 'delete']);

Route::get('dashboard/project/category', [ProjectCategoryController::class, 'index']);
Route::get('dashboard/project/category/add', [ProjectCategoryController::class, 'add']);
Route::get('dashboard/project/category/edit/{slug}', [ProjectCategoryController::class, 'edit']);
Route::get('dashboard/project/category/view/{slug}', [ProjectCategoryController::class, 'view']);
Route::post('dashboard/project/category/submit', [ProjectCategoryController::class, 'insert']);
Route::post('dashboard/project/category/update', [ProjectCategoryController::class, 'update']);
Route::post('dashboard/project/category/softdelete', [ProjectCategoryController::class, 'softdelete']);
Route::post('dashboard/project/category/restore', [ProjectCategoryController::class, 'restore']);
Route::post('dashboard/project/category/delete', [ProjectCategoryController::class, 'delete']);

Route::get('dashboard/partner', [PartnerController::class, 'index']);
Route::get('dashboard/partner/add', [PartnerController::class, 'add']);
Route::get('dashboard/partner/edit/{slug}', [PartnerController::class, 'edit']);
Route::get('dashboard/partner/view/{slug}', [PartnerController::class, 'view']);
Route::post('dashboard/partner/submit', [PartnerController::class, 'insert']);
Route::post('dashboard/partner/update', [PartnerController::class, 'update']);
Route::post('dashboard/partner/softdelete', [PartnerController::class, 'softdelete']);
Route::post('dashboard/partner/restore', [PartnerController::class, 'restore']);
Route::post('dashboard/partner/delete', [PartnerController::class, 'delete']);

Route::get('dashboard/client', [ClientController::class, 'index']);
Route::get('dashboard/client/add', [ClientController::class, 'add']);
Route::get('dashboard/client/edit/{slug}', [ClientController::class, 'edit']);
Route::get('dashboard/client/view/{slug}', [ClientController::class, 'view']);
Route::post('dashboard/client/submit', [ClientController::class, 'insert']);
Route::post('dashboard/client/update', [ClientController::class, 'update']);
Route::post('dashboard/client/softdelete', [ClientController::class, 'softdelete']);
Route::post('dashboard/client/restore', [ClientController::class, 'restore']);
Route::post('dashboard/client/delete', [ClientController::class, 'delete']);

Route::get('dashboard/testimonial', [TestimonialController::class, 'index']);
Route::get('dashboard/testimonial/add', [TestimonialController::class, 'add']);
Route::get('dashboard/testimonial/edit/{slug}', [TestimonialController::class, 'edit']);
Route::get('dashboard/testimonial/view/{slug}', [TestimonialController::class, 'view']);
Route::post('dashboard/testimonial/submit', [TestimonialController::class, 'insert']);
Route::post('dashboard/testimonial/update', [TestimonialController::class, 'update']);
Route::post('dashboard/testimonial/softdelete', [TestimonialController::class, 'softdelete']);
Route::post('dashboard/testimonial/restore', [TestimonialController::class, 'restore']);
Route::post('dashboard/testimonial/delete', [TestimonialController::class, 'delete']);

Route::get('dashboard/registration', [RegistrationController::class, 'index']);
Route::get('dashboard/registration/view/{slug}', [RegistrationController::class, 'view']);
Route::post('dashboard/registration/softdelete', [RegistrationController::class, 'softdelete']);
Route::post('dashboard/registration/restore', [RegistrationController::class, 'restore']);
Route::post('dashboard/registration/delete', [RegistrationController::class, 'delete']);
Route::get('dashboard/registration/pdf', [RegistrationController::class, 'pdf']);
Route::get('dashboard/registration/excel', [RegistrationController::class, 'excel']);

Route::get('dashboard/newsletter/subscribe', [NewsletterSubscribeController::class, 'index']);
Route::get('dashboard/newsletter/subscribe/view/{slug}', [NewsletterSubscribeController::class, 'view']);
Route::post('dashboard/newsletter/subscribe/softdelete', [NewsletterSubscribeController::class, 'softdelete']);
Route::post('dashboard/newsletter/subscribe/restore', [NewsletterSubscribeController::class, 'restore']);
Route::post('dashboard/newsletter/subscribe/delete', [NewsletterSubscribeController::class, 'delete']);
Route::get('dashboard/newsletter/subscribe/pdf', [NewsletterSubscribeController::class, 'pdf']);
Route::get('dashboard/newsletter/subscribe/excel', [NewsletterSubscribeController::class, 'excel']);

Route::get('dashboard/contact/message', [ContactMessageController::class, 'index']);
Route::get('dashboard/contact/message/view/{slug}', [ContactMessageController::class, 'view']);
Route::post('dashboard/contact/message/softdelete', [ContactMessageController::class, 'softdelete']);
Route::post('dashboard/contact/message/restore', [ContactMessageController::class, 'restore']);
Route::post('dashboard/contact/message/delete', [ContactMessageController::class, 'delete']);
Route::get('dashboard/contact/message/pdf', [ContactMessageController::class, 'pdf']);
Route::get('dashboard/contact/message/excel', [ContactMessageController::class, 'excel']);

Route::get('dashboard/report', [ReportController::class, 'index']);

Route::get('dashboard/access', [AccessController::class, 'index']);

//Route::get('mail', [MailController::class, 'index']);
Route::get('registration-mail', [MailController::class, 'index']);

Route::get('dashboard/recycle', [RecycleController::class, 'index']);
Route::get('dashboard/recycle/user', [RecycleController::class, 'user']);
Route::get('dashboard/recycle/gallery', [RecycleController::class, 'gallery']);

//laravel routes
require __DIR__.'/auth.php';
