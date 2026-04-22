<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('exchanges', function (Blueprint $table) {
            if (!Schema::hasColumn('exchanges', 'skill_offered_id')) {
                $table->foreignId('skill_offered_id')->nullable()->constrained('skills')->nullOnDelete();
            }

            if (!Schema::hasColumn('exchanges', 'skill_wanted_id')) {
                $table->foreignId('skill_wanted_id')->nullable()->constrained('skills')->nullOnDelete();
            }

            if (!Schema::hasColumn('exchanges', 'message')) {
                $table->text('message')->nullable();
            }

            if (!Schema::hasColumn('exchanges', 'scheduled_at')) {
                $table->dateTime('scheduled_at')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('exchanges', function (Blueprint $table) {
            if (Schema::hasColumn('exchanges', 'scheduled_at')) {
                $table->dropColumn('scheduled_at');
            }

            if (Schema::hasColumn('exchanges', 'message')) {
                $table->dropColumn('message');
            }

            if (Schema::hasColumn('exchanges', 'skill_wanted_id')) {
                $table->dropConstrainedForeignId('skill_wanted_id');
            }

            if (Schema::hasColumn('exchanges', 'skill_offered_id')) {
                $table->dropConstrainedForeignId('skill_offered_id');
            }
        });
    }
};

