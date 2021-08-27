<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablesAddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('regencies', function (Blueprint $table) {
            $table->foreign('province_id')->references('id')->on('provinces');
        });
        Schema::table('districts', function (Blueprint $table) {
            $table->foreign('regency_id')->references('id')->on('regencies');
        });
        Schema::table('villages', function (Blueprint $table) {
            $table->foreign('district_id')->references('id')->on('districts');
        });
        Schema::table('customers', function (Blueprint $table) {
            $table->foreignUuid('village_id')->constrained('villages');
        });
        Schema::table('suppliers', function (Blueprint $table) {
            $table->foreignUuid('village_id')->constrained('villages');
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->foreignUuid('customer_id')->constrained('customers');
        });
        Schema::table('purchases', function (Blueprint $table) {
            $table->foreignUuid('supplier_id')->constrained('suppliers');
        });
        Schema::table('sales_products', function (Blueprint $table) {
            $table->foreignUuid('sale_id')->constrained('sales');
            $table->foreignUuid('product_id')->constrained('products');
        });
        Schema::table('purchases_products', function (Blueprint $table) {
            $table->foreignUuid('purchases_id')->constrained('purchases');
            $table->foreignUuid('product_id')->constrained('products');
        });
        Schema::table('stocks', function (Blueprint $table) {
            $table->foreignUuid('product_id')->constrained('products');
            $table->foreignUuid('purchases_id')->constrained('purchases');
            $table->foreignUuid('sale_id')->constrained('sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //     Schema::table('regencies', function (Blueprint $table) {
        //         $table->dropForeign('province_id');
        //     });
        //     Schema::table('districts', function (Blueprint $table) {
        //         $table->dropForeign('regency_id');
        //     });
        //     Schema::table('villages', function (Blueprint $table) {
        //         $table->dropForeign('district_id');
        //     });
        //     Schema::table('customers', function (Blueprint $table) {
        //         $table->dropForeignUuid('village_id');
        //     });
        //     Schema::table('suppliers', function (Blueprint $table) {
        //         $table->dropForeignUuid('village_id');
        //     });
        //     Schema::table('sales', function (Blueprint $table) {
        //         $table->dropForeignUuid('customer_id');
        //     });
        //     Schema::table('purchases', function (Blueprint $table) {
        //         $table->dropForeignUuid('supplier_id');
        //     });
        //     Schema::table('sales_products', function (Blueprint $table) {
        //         $table->dropForeignUuid('sale_id');
        //         $table->dropForeignUuid('product_id');
        //     });
        //     Schema::table('purchases_products', function (Blueprint $table) {
        //         $table->dropForeignUuid('purchases_id');
        //         $table->dropForeignUuid('product_id');
        //     });
        //     Schema::table('stocks', function (Blueprint $table) {
        //         $table->dropForeignUuid('product_id');
        //         $table->dropForeignUuid('purchases_id');
        //         $table->dropForeignUuid('sale_id');
        //     });
    }
}
