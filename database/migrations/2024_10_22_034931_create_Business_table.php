<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->string('unified_number', 10)->primary()->comment('統一編號');
            $table->string('business_name', 100)->comment('商業名稱');
            $table->string('business_address', 200)->comment('商業地址');
            $table->decimal('paid_in_capital', 15, 2)->comment('實收資本額');
            $table->date('establishment_date')->comment('核准設立日期');
            $table->string('imported_business_address', 200)->comment('營業地址（財政資訊中心匯入）');
            $table->string('industry_code_imported', 255)->nullable()->comment('行業代號（財政資訊中心匯入）');
            $table->date('imported_date')->comment('財政資訊中心匯入日期');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business');
    }
}