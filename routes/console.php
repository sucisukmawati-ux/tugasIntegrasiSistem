namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function add(Request $request)
    {
        $a = $request->query('a', 0);
        $b = $request->query('b', 0);

        return response()->json([
            'result' => $a + $b,
        ]);
    }
}
