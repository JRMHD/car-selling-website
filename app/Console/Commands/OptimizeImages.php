<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;

class OptimizeImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:optimize-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
{
    $imagesPath = storage_path('app/public/images');
    $images = glob($imagesPath . '/*');

    foreach ($images as $image) {
        $img = Image::make($image);
        $img->optimize();
        $img->save();
        $this->info('Optimized: ' . basename($image));
    }

    $this->info('All images optimized successfully!');
}
}
