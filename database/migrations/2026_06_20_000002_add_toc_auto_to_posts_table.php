<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('posts') && ! Schema::hasColumn('posts', 'toc_auto')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->boolean('toc_auto')->default(true)->after('table_of_contents');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('posts') && Schema::hasColumn('posts', 'toc_auto')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('toc_auto');
            });
        }
    }
};
