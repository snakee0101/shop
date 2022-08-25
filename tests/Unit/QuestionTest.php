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
        Question::factory()->create([
            'product_id' => $product = Product::factory()->create()
        ]);

        $this->assertInstanceOf(Question::class, $product->questions[0]);
    }

    public function test_a_question_has_an_author()
    {
        $this->assertInstanceOf(User::class, Question::factory()->make()->author);
    }

    public function test_question_belongs_to_a_product()
    {
        $question = Question::factory()->create([
            'product_id' => Product::factory()->create()
        ]);

        $this->assertInstanceOf(Product::class, $question->product);
    }
}
