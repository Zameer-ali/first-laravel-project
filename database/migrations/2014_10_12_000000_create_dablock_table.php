<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->enum('email_verified',
            [
                User::EMAIL_VERIFIED,
                User::EMAIL_NOT_VERIFIED
                
            ])->default(User::EMAIL_NOT_VERIFIED);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number');
            $table->string('password');
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->integer('post_code');
            $table->string('country');
            $table->enum('role', 
            [
                User::ROLE_CUSTOMER, 
                User::ROLE_SELLER, 
                User::ROLE_PROFESSIONAL
            ])->default(User::ROLE_CUSTOMER);
            $table->string('introduction', 150)->nullable();
            $table->string('background', 200)->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('occupation')->nullable();
            $table->string('specialisation')->nullable();
            $table->string('household_type')->nullable();
            $table->string('price_range')->nullable();
            $table->string('experience')->nullable();
            $table->integer('referred_by')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->enum('status', 
            [
                User::ACTIVE,
                User::DELETED 
            ])->default(User::ACTIVE);
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->bigInteger('flags')->default(0);

        });

        Schema::create('agent_reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('communication');
            $table->integer('reliability');
            $table->integer('quality');
            $table->integer('Negotiation');
            $table->string('review');
            $table->timestamps();
            $table->bigInteger('flags')->default(0);
            $table->enum('status', 
            [
                User::APPROVED, 
                User::NOT_APPROVED, 
                User::PENDING
            ])->default(User::PENDING);

            // Foreign key from
            $table->foreignId('from')->references('id')->on('users');

            // Foreign key to
            $table->foreignId('to')->references('id')->on('users');
        });
  
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('flags')->default(0);
            
            // Foreign key
            $table->foreignId('user_id')->references('id')->on('users');
        });

        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('rating');
            $table->text('feedback');
            $table->timestamps();
            $table->bigInteger('flags')->default(0);

            // Foreign key
            $table->foreignId('user_id')->references('id')->on('users');
        });
        
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('flags')->default(0);

        });

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('flags')->default(0);

        });

        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('feedback');
            $table->timestamps();
            $table->bigInteger('flags')->default(0);

           
            // Foreign key for post
            // $table->foreignId('post_id')->references('id')->on('posts');
            
            // Foreign key for users
            // $table->foreignId('user_id')->references('id')->on('users');
        });
        
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('Industry');
            $table->string('Occupation');
            $table->text('comments_and_questions');
            $table->timestamps();
            $table->bigInteger('flags')->default(0);
        });
       
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('flags')->default(0);

             // Foreign key for houses
            // $table->foreignId('house_id')->references('id')->on('houses');
            
            // Foreign key for users
            // $table->foreignId('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        // Schema::table('client_reviews', function (Blueprint $table) {
        //     $table->dropForeign('client_reviews_user_id_foreign');
        // });
        // Schema::dropIfExists('users');
        // Schema::dropIfExists('client_reviews');
        // Schema::dropIfExists('partners');
        // Schema::dropIfExists('feedbacks');
        // Schema::dropIfExists('blogs');
        // Schema::dropIfExists('posts');
        // Schema::dropIfExists('post_comments');
        // Schema::dropIfExists('questions');
    }
};
