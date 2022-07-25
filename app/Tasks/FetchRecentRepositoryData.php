<?php

namespace App\Tasks;

use App\Models\Repository;
use Illuminate\Support\Facades\Http;

class FetchRecentRepositoryData
{
    public function __invoke() {
        $url = config('github.api.url');
        $token = config('github.api.token');
    
        $response = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => "token $token",
        ])->get("$url/user/repos");
    
        foreach ($response->json() as $repository) {
            Repository::updateOrCreate(['github_id' => $repository['id']], [
                'github_id' => $repository['id'],
                'url' => $repository['html_url'],
                'name' => $repository['name'],
                'description' => $repository['description'],
                'stars' => $repository['stargazers_count'],
                'forks' => $repository['forks_count'],
                'language' => $repository['language'],
            ]);
        }
    }
}
