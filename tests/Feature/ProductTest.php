namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_product()
    {
        $response = $this->post('/products', [
            'name' => 'Test Product',
            'description' => 'This is a test product',
            'price' => 10.99,
        ]);

        $this->assertCount(1, Product::all());
    }
}