<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('kyctype');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('pan_number')->unique();
            $table->string('gender');
            $table->string('marital_status');
            $table->string('occupation');
            $table->string('address', "65535");
            $table->string('city');
            $table->integer('pincode');
            $table->boolean('MSME_cert');
            $table->boolean('GST_cert');
            $table->boolean('two_yrs_it_returns');
            $table->boolean('one_yr_business_statement');
            $table->boolean('income_proof');
            $table->boolean('company_id_card');
            $table->boolean('three_months_payslip');
            $table->boolean('six_months_sal_statement');
            $table->timestamps();
            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kycs');
    }
}
