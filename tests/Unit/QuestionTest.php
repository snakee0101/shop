<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\Question;
use App\Models\User;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    public function test_a_product_has_questions()
    {
        $product = Product::factory()->create();

        Question::factory()->create([
            'product_id' => $product
        ]);

        $this->assertInstanceOf(Question::class, $product->fresh()->questions[0]);
    }

    public function test_a_question_has_an_author()
    {
        $q = Question::factory()->create();
        $this->assertInstanceOf(User::class, $q->author);
    }
}
