<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixed_Deposit extends Model
{
    use HasFactory;
    protected $fillable = ['customer_status', 'title', 'name', 'maidenname', 'dob', 'country_of_origin',
    'mobile_number', 'email', 'residential_address', 'nearest_landmark', 'city', 'postal_address', 'emerg_contact_name', 'emerg_relationship_with_client',
    'emerg_contact_number','emp_status', 'monthly_income_range',  'withdrawals', 'exp_top_up_amnt', 'exp_withdrawal_amnt', 'statement_delivery', 'statement_freq', 
    'bank_name', 'account_number', 'bank_branch', 'agree_terms'];

    //  'id_type', 'id_number', 'issue_date', 'expiry_date', 'emp_school_name', 'emp_school_name_address','nearest_landmark', 'digital_address', 'city_town', 'nature_of_business', 'emp_contact', 'emp_email', 'investment_objective', 'initial_investment_amnt','funds_source', 'investment_freq',
    //EXPECTED ACCOUNT ACTIVITY
}