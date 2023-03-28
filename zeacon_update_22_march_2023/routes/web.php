<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KycController;
use App\Http\Controllers\PaymentController;
use App\Models\Deposit;

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

Route::get('sign-up', [AuthController::class, 'registerPage']);
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'loginPage'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('reset-password', function () {
    return view('reset');
});
Route::get('verify-email', function () {
    return view('verify-email');
});
Route::post('verify-email', [AuthController::class,'verify_email']);
Route::middleware(['auth:sanctum', 'verified', 'UserMiddleware'])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'dashboard']);
    Route::get('deposit', [DepositController::class, 'depositPage']);
    Route::get('send', [WalletController::class, 'sendPage']);
    Route::get('withdraw', [WalletController::class, 'withdrawPage']);
    Route::post('withdraw', [WalletController::class, 'withdraw']);

    Route::get('transfer', [WalletController::class, 'transferPage'])->name('transfer');
    Route::get('trade', [WalletController::class, 'tradePage']);
    Route::get('profile', [WalletController::class, 'profilePage']);
    Route::get('txn', [WalletController::class, 'transactionPage']);
    Route::get('kyc',[KycController::class,'kycPage']);
    Route::post('kycData',[KycController::class,'kycData']);

    Route::get('addbank',[ BankController::class,'add_bank_page']);
    Route::post('add_bank',[ BankController::class,'add_bank']);
    Route::post('binary_id_submit',[WalletController::class,'binary_id_submit']);
    Route::post('enaira_wallet_submit',[WalletController::class,'enaira_wallet_submit']);
    Route::post('internal-transfer',[WalletController::class,'internalTransfer']);

Route::post('confirmed-internal-transfer',[WalletController::class,'confirmed_internal_transfer']);

    //Paystack Callback URL
    Route::get('paystack/callback',[PaymentController::class,'paystack_callback']);
    //PayStack Pay URL
    Route::post('/pay', [PaymentController::class,'paystack_pay'])->name('pay');

Route::post('manual-deposit/{id}',[DepositController::class,'manual_deposit']);

Route::post('bank-deposit',[DepositController::class,'bank_deposit']);


Route::post('crypto-payment',[DepositController::class,'crypto_payment']);
Route::get('crypto-payment-page/{payment_id}', [DepositController::class, 'cryptoPaymentPage']);

Route::post('/deposit/submitByPayeer',[DepositController::class,'submitByPayeer']);

});

Route::middleware(['auth:sanctum', 'verified', 'AdminMiddleware'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'adminDashboard']);
    Route::get('admin/client-mgt', [DashboardController::class, 'clientMgt'])->name('client-mgt');
    Route::post('admin/update-user-status/{id}', [DashboardController::class, 'update_user_status']);

    Route::get('admin/deposit', [DashboardController::class, 'adminDeposit']);
    Route::post('admin/update-deposit-status/{id}', [DashboardController::class, 'update_deposit_status']);
    Route::post('admin/update-manual-deposit-status/{id}', [DashboardController::class, 'update_manual_deposit_status']);


    Route::get('admin/d_methods', [DashboardController::class, 'depositMethod']);
    Route::post('admin/dmethod-update/{id}', [DashboardController::class, 'dmethod_update']);

    Route::get('admin/fee', [DashboardController::class, 'fee']);
    Route::post('admin/update-fee/{id}', [DashboardController::class, 'update_fee']);

    Route::get('admin/deposit_rate', [DashboardController::class, 'depositRate']);
    Route::post('admin/update_deposit_rate/{id}', [DashboardController::class, 'updateDepositRate']);

    Route::get('admin/rate', [DashboardController::class, 'rate']);
    Route::post('admin/update-ngn-rate', [DashboardController::class, 'update_ngn_rate']);

    Route::get('admin/transfer', [DashboardController::class, 'adminTransfer']);
    Route::post('admin/update-transfer-status/{id}', [DashboardController::class, 'update_transfer_status']);

    Route::get('admin/withdrawal', [DashboardController::class, 'withdrawl']);
    Route::post('admin/update-withdraw-status/{id}', [DashboardController::class, 'update_withdrawal_status']);


    Route::get('admin/kyc', [DashboardController::class, 'kyc']);
    Route::post('admin/kyc_action/{id}', [DashboardController::class, 'kyc_action']);

    Route::get('admin/edit/{id}',[DashboardController::class,'edit_user_page']);
    Route::post('admin/edit-user/{id}',[DashboardController::class,'edit_user']);

    Route::get('admin/view/{id}',[DashboardController::class,'view_page']);

    Route::post('admin/add-customer-transaction/{id}',[DashboardController::class,'add_customer_transaction']);

    Route::post('admin/sendmail/{id}',[DashboardController::class,'sendmail']);

    Route::get('/admin/updateManualAccount', [DashboardController::class,'sendToUpdateAccount']);

    Route::post('/admin/updateManualAccount',[DashboardController::class,'updateManualAccount']);

    // Route::post('/deposit/submitByPayeer',[DepositController::class,'submitByPayeer']);
});
