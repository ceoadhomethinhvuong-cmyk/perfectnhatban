<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('posts')) {
            return;
        }

        Schema::table('posts', function (Blueprint $table) {
            if (! Schema::hasColumn('posts', 'faq_title')) {
                $table->string('faq_title')->nullable()->after('faq_items');
            }

            if (! Schema::hasColumn('posts', 'faq_color')) {
                $table->string('faq_color', 20)->nullable()->after('faq_title');
            }
        });
    }

    public function down(): void
    {
        if (! Schema::hasTable('posts')) {
            return;
        }

        Schema::table('posts', function (Blueprint $table) {
            if (Schema::hasColumn('posts', 'faq_color')) {
                $table->dropColumn('faq_color');
            }

            if (Schema::hasColumn('posts', 'faq_title')) {
                $table->dropColumn('faq_title');
            }
        });
    }
};
