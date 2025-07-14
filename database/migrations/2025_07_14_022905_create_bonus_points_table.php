<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bonus_points', function (Blueprint $table) {
            $table->comment('商家點數');
            $table->id();
            $table->foreignIdFor(\App\Models\Vendor::class)->comment('商家ID')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Consumer::class)->default(null)->nullable()->comment('消費者ID')->constrained();
            $table->integer('offer_points')->default(0)->comment('當初給予點數');
            $table->integer('current_points')->default(0)->comment('目前剩餘點數');
            $table->tinyInteger('type')->default(2)->comment('類型(有限:1、永久:2)');
            $table->tinyInteger('status')->default(0)->comment('狀態(啟用:1、停用:0)');
            $table->dateTime('start_at')->nullable()->comment('有限-開始時間');
            $table->dateTime('end_at')->nullable()->comment('有限-結束時間');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bonus_points');
    }
};
