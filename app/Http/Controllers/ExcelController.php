<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;

class ExcelController extends Controller
{

    public function exibirFormulario()
    {
        return view('formulario');
    }
    public function submitForm(Request $request)
    {

        //require __DIR__ . 'vendor/autoload.php';
        // Autentica a biblioteca cliente do Google Sheets
        $client = new \Google_Client();
        $client->setApplicationName('controle');
        $client->setAuthConfig($directory = public_path('credentials.json'));
        $client->setScopes([Sheets::SPREADSHEETS]);
    
        // Envia os dados para a planilha
        $service = new \Google\Service\Sheets($client);
        $spreadsheetId = '1VQysGT1UD8-idqEiNvM2beVWT3eMU4cqbp7Yv8M_mm8';
        $range = 'controle!A1:B'; // Defina o intervalo correto para as colunas da sua planilha
    
        $values = [
            [$request->input('coluna1'), $request->input('coluna2'), $request->input('coluna3'), $request->input('coluna4'), $request->input('coluna5'), $request->input('coluna6'), $request->input('coluna7'), $request->input('coluna8'), $request->input('coluna9'), $request->input('coluna10'), $request->input('coluna11'), $request->input('coluna12'),$request->input('coluna13')]
        ];
    
        $body = new ValueRange([
            'values' => $values,
        ]);
    
        $params = [
            'valueInputOption' => 'RAW',
        ];
    
        $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
    
        
        return redirect()->back()->with('success', 'Formulário enviado com sucesso!');
    }

}
