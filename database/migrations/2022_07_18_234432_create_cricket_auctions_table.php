<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCricketAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cricket_auctions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained('players')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('auction_starts_at')->nullable();
            $table->timestamp('auction_ends_at')->nullable();
            $table->enum('sold', [0,1])->default(0);
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
        Schema::dropIfExists('cricket_auctions');
    }
}
