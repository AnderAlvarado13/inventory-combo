<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_assets', function (Blueprint $table) {
            $table->id();
            $table->string('serial_code', 250)->unique();
            $table->string('trademark', 250);
            $table->string('reference', 250);
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->foreignId('employee_id')->nullable()->constrained('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_assets');
    }
}
