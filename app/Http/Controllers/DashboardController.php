<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $vencimento = date('Y-m');
        $input = $request->all();
        if (isset($input['vencimento']) && !empty($input['vencimento']))
        {
            $data = ['vencimento' => $input['vencimento']];
            $vencimento = $input['vencimento'];
        }
        $despesas = [
            'total' => '0',
            'despesas' => ''
        ];

        $receitas = [
            'total' => '0',
            'receitas' => ''
        ];

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('access_token')
        ])->post(env('WALLET_BASE_URL') . 'despesas', $data);
        if (isset($response->object()->status)) {
            if ($response->object()->status == env('CODE_AUTH_FAIL')) {
                // session()->forget(['user','access_token']);
                session()->flush();
                return redirect()->route('login');
            }
        } else {
            $despesas['despesas'] = $response->object();
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . session('access_token')
            ])->post(env('WALLET_BASE_URL') . 'receitas', $data);

            $receitas['receitas'] = $response->object();
            $total = 0;
            if (!empty($despesas['despesas'])) {
                foreach ($despesas['despesas'] as $desp) {
                    $total += $desp->valor;
                }
            }
            $despesas['total'] = $total;

            $total = 0;
            if (!empty($receitas['receitas'])) {
                foreach ($receitas['receitas'] as $rec) {
                    $total += $rec->valor;
                }
            }
            $receitas['total'] = $total;

            return view('dashboard', compact(['despesas', 'receitas','vencimento']));
        }
    }
}
