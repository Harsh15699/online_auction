<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('username');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('age');
            $table->enum('nationality', ['domestic', 'foreign']);
            $table->enum('skillset', ['batsman', 'bowler','all-rounder']);
            $table->string('country');
            $table->integer('base_price');
            $table->string('identity_proof_number');
            $table->string('image_link');
            $table->integer('total_matches');
            $table->integer('total_innings');
            $table->integer('total_runs');
            $table->integer('total_wickets');
            $table->integer('hundreds');
            $table->integer('fifties');
            $table->integer('fifer');
            $table->integer('economy');
            $table->integer('strike_rate');
            $table->enum('verified', [0,1])->default(0);
            $table->enum('sold', [0,1])->default(0);
            $table->enum('added_for_auction', [0,1])->default(0);
            $table->integer('sold_price')->nullable();
            $table->foreignId('team_id')->nullable()->constrained('teams')->onDelete('set null');
            $table->rememberToken();
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
        Schema::dropIfExists('players');
    }
}
