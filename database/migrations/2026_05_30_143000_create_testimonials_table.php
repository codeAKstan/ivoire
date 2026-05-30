<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->string('author_name');
            $blueprint->string('author_title')->nullable();
            $blueprint->text('quote');
            $blueprint->boolean('is_active')->default(true);
            $blueprint->integer('order')->default(0);
            $blueprint->timestamps();
        });

        // Seed initial static testimonials
        DB::table('testimonials')->insert([
            [
                'author_name' => 'Babatope Adewoye',
                'author_title' => 'CEO, Conglex Technologies',
                'quote' => 'They helped us navigate complex regulatory licensing in multiple West African markets. Their proactive advice saved us months of delays with regulators.',
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_name' => 'Nonso Odili',
                'author_title' => 'COO, Drug-IT',
                'quote' => 'As we seek to revolutionise pharmtech in Nigeria and Africa, Ivoire has become our trust partner, from ensuring our business is compliance to handholding us throughout our investment journey and ensuring we meet investor expectations. They have been our trust partner since 2021.',
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_name' => 'Onyinye Olisah',
                'author_title' => 'CEO, Onus Financial services',
                'quote' => 'Having an embedded legal team completely changed our speed of execution. Instead of waiting weeks for external contract reviews, we get legal approvals within hours directly in Slack.',
                'is_active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_name' => 'Oluwole Abu',
                'author_title' => 'COO, Budpay',
                'quote' => 'Ivoire understands the complexities of our business and our industry. They provide us with a dedicated team and their response time is unmatched. Their expertise ranges from fintech, to corporate governance, to financing and even disputes, they provide full range legal services.',
                'is_active' => true,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
