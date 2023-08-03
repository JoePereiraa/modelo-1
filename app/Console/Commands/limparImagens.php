<?php

namespace App\Console\Commands;

use App\Models\Admin\App_config;
use App\Models\Admin\App_conteudo_valor;
use App\Models\Admin\App_idiomas;
use App\Models\Admin\App_upload;
use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;

class limparImagens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'limpar-imagens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $imagens = App_upload::all();

        foreach ($imagens as $file) {
            $file_search = '%' . $file->file . '%';
            $usoImg = App_conteudo_valor::where('valor', 'like', $file_search)->get()->first();
            $usoImg2 = App_config::where('valor', 'like', $file_search)->get()->first();
            $usoImg3 = App_idiomas::where('thumb', 'like', $file_search)->get()->first();

            if (empty($usoImg) && empty($usoImg2) && empty($usoImg3)) {
                /* Remove arquivo hospedagem*/
                $file_url = 'public/uploads/' . $file->file;
                File::delete($file_url);

                /*  Remove Webp */
                $file_webp = pathinfo($file->file, PATHINFO_FILENAME);
                $extension_webp = pathinfo($file->file, PATHINFO_EXTENSION);
                $file_webp = $file_webp . $extension_webp;
                $file_webp = str_replace(' ', '', $file_webp);
                $file_webp = str_replace('%20', '', $file_webp) . '.webp';
                $file_webp = 'public/uploads/' . $file_webp;
                if (file_exists($file_webp)) {
                    File::delete($file_webp);
                }

                /* Remove thumb */
                $file_thumb = 'public/uploads/thumbs/' . md5($file->file) . '.jpg';
                if (file_exists($file_thumb)) {
                    File::delete($file_thumb);
                }

                $file_thumb = 'public/uploads/thumbs/' . md5($file->file) . '.png';
                if (file_exists($file_thumb)) {
                    File::delete($file_thumb);
                }


                /*  Remove arquivo DB*/
                $file->delete();

                $this->info('Excluído arquivo ' . $file->file);
            }
        }
    }
}
