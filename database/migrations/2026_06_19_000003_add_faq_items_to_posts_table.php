<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('posts') && ! Schema::hasColumn('posts', 'faq_items')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->longText('faq_items')->nullable()->after('table_of_contents');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('posts') && Schema::hasColumn('posts', 'faq_items')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('faq_items');
            });
        }
    }
};
