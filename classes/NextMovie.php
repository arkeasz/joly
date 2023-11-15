<?php

declare(strict_types=1);

class NextMovie
{
    public function __construct(
        private string $title,
        private int $days_until,
        private string $following_production,
        private string $release_date,
        private string $poster_url,
        private string $overview
    )
    {}

    public function get_until_message(): string {
        $days = $this->days_until;

        return match (true) {
            $days == 0 => "Se estrena hoy",
            $days == 1 => "Mañana se estrena",
            $days < 7 => "Esta semana se estrena",
            $days < 30 => "se estrena este mes",
            default => "$days dias hasta el estreno"
        };
    }

    public static function create_movie(string $api_url): self {
        $result = file_get_contents($api_url);
        $data = json_decode($result, true);
        return new self(
            $data["title"],
            $data["days_until"],
            $data["following_production"]["title"],
            $data["release_date"],
            $data["poster_url"],
            $data["overview"]
        );
    }


    public function get_data(): array {
        return get_object_vars($this);
    }
}
