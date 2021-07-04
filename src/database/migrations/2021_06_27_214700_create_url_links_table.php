<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrlLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_links', function (Blueprint $table) {
            $table->id();
            $table->text('hash');
            $table->text('url');
            $table->json('name')->nullable();
            $table->string('target'); // the target frame for the link. e.g. _blank, _top, _none.
            $table->string('notes')->nullable();
            $table->json('description')->nullable();
            $table->boolean('visible')->default(1);
            $table->unsignedBigInteger('user_id');// – ID of user who created the link.
            $table->json('rel');  // – IDs of posts or pages or comments etc. have this link.
            $table->integer('rating'); // 0-10
            $table->text('thumbnail_url')->nullable(null);

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
        Schema::dropIfExists('url_links');
    }
}
