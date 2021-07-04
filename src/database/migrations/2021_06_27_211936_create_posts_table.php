<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->json('name'); // json => translate // or you can use longText
            $table->string('slug')->nullable();
            $table->longText('content');

            $table->json('tags'); // – array of tags id
            $table->json('categories'); // – array of categories id


            $table->string('status')->default('publish'); // – status of the post, e.g. ‘draft’, ‘pending’, ‘private’, ‘publish’.
            $table->string('password')->nullable(null);

            $table->boolean('allow_comment')->default(true);

            $table->unsignedBigInteger('post_type_id')->nullable(); //post,page
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
        Schema::dropIfExists('posts');
    }
}
