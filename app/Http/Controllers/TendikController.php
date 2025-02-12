namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TendikController extends Controller
{
    public function index()
    {
        return view('tendik.index');
    }

    public function create()
    {
        return view('tendik.create');
    }
}
