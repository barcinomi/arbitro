<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use App\Utils\ElrondConverter;

class PagesController extends Controller
{
    
    private $walletAddress;

    function __construct() {
        $this->walletAddress = $this->getWalletAddress();
    }

    
    public function index() {

        $walletBalanceWEGLD = $this->getWalletBallanceWEGLD();
        $walletBalanceWEGLD = number_format(ElrondConverter::fromDenomiated($walletBalanceWEGLD), 2, '.', '');


        $walletBalanceEGLD = $this->getWalletBallanceEGLD();
        $walletBalanceEGLD = number_format(ElrondConverter::fromDenomiated($walletBalanceEGLD), 2, '.', '');


        $walletBalanceUTK = $this->getWalletBallanceUTK();
        $walletBalanceUTK = number_format(ElrondConverter::fromDenomiated($walletBalanceUTK), 2, '.', '');

        $testumber = 565.65161;
        $testumber = ElrondConverter::toHex($testumber);

        $displayWalletAddress = $this->getWallet();

        return view('welcome', compact('walletBalanceWEGLD', 'walletBalanceUTK', 'walletBalanceEGLD', 'displayWalletAddress'));
    }
    

    public function swap(Request $request) {

        $egldAmount = $request->egld_amount;

        $walletKeyPem = storage_path('keys/WalletKey.pem');

        $mywallet = $this->getWallet();
        $nonce = shell_exec('erdpy account get --nonce --address ' . $mywallet);
        $nonce = trim($nonce);

    
            $wegld = '0x5745474c442d626434643739';
    
            $amount_wegld = ElrondConverter::toDenominated($egldAmount);
    
            $swapTokensToFixInput = '0x73776170546f6b656e734669786564496e707574';
    
            $utk = '0x55544b2d326638306539';
    
            $amount_utk = '1000000000000000000';
    
            $result = shell_exec('erdpy contract call erd1qqqqqqqqqqqqqpgq0lzzvt2faev4upyf586tg38s84d7zsaj2jpsglugga --function ESDTTransfer --arguments ' . $wegld . ' ' . $amount_wegld . ' ' . $swapTokensToFixInput . ' ' . $utk . ' ' . $amount_utk . '  --pem ' . $walletKeyPem . ' --nonce ' . $nonce . ' --gas-limit 90000000 --send');

            $result = json_decode($result, true);

            $transactionHash = $result['emittedTransactionHash'];

        return view('swap', compact('egldAmount', 'transactionHash'));

    }

    public function swaputk(Request $request) {
        
        $utkAmount = $request->utk_amount;
 
        $walletKeyPem = storage_path('keys/WalletKey.pem');

        $mywallet = $this->getWallet();
        $nonce = shell_exec('erdpy account get --nonce --address ' . $mywallet);
        $nonce = trim($nonce);

    
            $wegld = '0x5745474c442d626434643739';
    
            $amount_wegld = '100000000000000000';
    
            $swapTokensToFixInput = '0x73776170546f6b656e734669786564496e707574';
    
            $utk = '0x55544b2d326638306539';
    
            $amount_utk = ElrondConverter::toDenominated($utkAmount);
    
            $result = shell_exec('erdpy contract call erd1qqqqqqqqqqqqqpgq0lzzvt2faev4upyf586tg38s84d7zsaj2jpsglugga --function ESDTTransfer --arguments ' . $utk . ' ' . $amount_utk . ' ' . $swapTokensToFixInput . ' ' . $wegld . ' ' . $amount_wegld . '  --pem ' . $walletKeyPem . ' --nonce ' . $nonce . ' --gas-limit 90000000 --send');


            $result = json_decode($result, true);

            $transactionHash = $result['emittedTransactionHash'];

        return view('swaputk', compact('utkAmount', 'transactionHash'));

    }


    public function wrapEGLD(Request $request) {

        $wrapAmount = $request->wrap_amount;

        $walletKeyPem = storage_path('keys/WalletKey.pem');

        $mywallet = $this->getWallet();
        $nonce = shell_exec('erdpy account get --nonce --address ' . $mywallet);
        $nonce = trim($nonce);
    
            $wegld = '0x5745474c442d626434643739';
    
            $amount_wrap = ElrondConverter::toDenominated($wrapAmount);
    
            $result = shell_exec('erdpy --verbose contract call erd1qqqqqqqqqqqqqpgqhe8t5jewej70zupmh44jurgn29psua5l2jps3ntjj3 --function wrapEgld  --value=' . $amount_wrap . ' --pem ' . $walletKeyPem . ' --nonce ' . $nonce . ' --gas-limit 90000000 --send');

            $result = json_decode($result, true);

            $transactionHash = $result['emittedTransactionHash'];

        return view('wrap', compact('wrapAmount', 'transactionHash'));

    }


    public function unwrapEGLD(Request $request) {

        $unwrapAmount = $request->unwrap_amount;

        $walletKeyPem = storage_path('keys/WalletKey.pem');

        $mywallet = $this->getWallet();
        $nonce = shell_exec('erdpy account get --nonce --address ' . $mywallet);
        $nonce = trim($nonce);
        $unwrapegld = '0x756e7772617045676c64';

    
            $wegld = '0x5745474c442d626434643739';

            $amount_unwrap = ElrondConverter::toDenominated($unwrapAmount);
    
            $result = shell_exec('erdpy --verbose contract call erd1qqqqqqqqqqqqqpgqhe8t5jewej70zupmh44jurgn29psua5l2jps3ntjj3 --function ESDTTransfer  --arguments ' . $wegld . ' ' . $amount_unwrap . ' ' . $unwrapegld . ' --pem ' . $walletKeyPem . ' --nonce ' . $nonce . ' --gas-limit 90000000 --send');

            $result = json_decode($result, true);

            $transactionHash = $result['emittedTransactionHash'];

        return view('unwrap', compact('unwrapAmount', 'transactionHash'));

    }


    public function sendToBinanceUTK(Request $request) {

        $sendToBinanceUTKAmount = $request->sendToBinanceUTK_amount;

        $walletKeyPem = storage_path('keys/WalletKey.pem');

        $mywallet = $this->getWallet();
        $nonce = shell_exec('erdpy account get --nonce --address ' . $mywallet);
        $nonce = trim($nonce);

            $utk = '0x55544b2d326638306539';
    
            $amountSendToBinance_utk = ElrondConverter::toDenominated($sendToBinanceUTKAmount);
    
            $result = shell_exec('erdpy --verbose contract call ' . env('BINANCE_UTK_WALLET') . ' --function ESDTTransfer  --arguments ' . $utk . ' ' . $amountSendToBinance_utk . ' --pem ' . $walletKeyPem . ' --nonce ' . $nonce . ' --gas-limit 90000000 --send');

            $result = json_decode($result, true);

            $transactionHash = $result['emittedTransactionHash'];

        return view('sendToBinanceUTK', compact('sendToBinanceUTKAmount', 'transactionHash'));

    }



#GET BALANCE & INFOS

    private function getWalletBallanceWEGLD() {
        $url = 'https://api.elrond.com/accounts/' . $this->getWallet() . '/tokens/WEGLD-bd4d79';

        $response = Http::get($url)->json();

        if( empty($response['balance']) )
            return 0;

        return $response['balance'];

    }

    private function getWalletBallanceEGLD() {
        $url = 'https://api.elrond.com/accounts/' . $this->getWallet();

        $response = Http::get($url)->json();

        if( empty($response['balance']) )
            return 0;

        return $response['balance'];

}

    private function getWalletBallanceUTK() {
        $url = 'https://api.elrond.com/accounts/' . $this->getWallet() . '/tokens/UTK-2f80e9';

        $response = Http::get($url)->json();

        if( empty($response['balance']) )
            return 0;

        return $response['balance'];

    }

    private function getWalletAddress() {

        $walletKeyPem = storage_path('keys/WalletKey.pem');

        $walletAddress = shell_exec('erdpy wallet pem-address ' . $walletKeyPem . '');

        $walletAddress = trim(preg_replace('/\s\s+/', ' ', $walletAddress));
    
        return $walletAddress;

    }

    private function getWallet() {
        return $this->walletAddress;
    }


}
