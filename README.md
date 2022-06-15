## Require

```bash
php8
swoole4
composer
```

## Installation

```bash
composer install
```

## Start

```bash
php http.php
```

## Usage

POST http://127.0.0.1:9501

json payload:
```json
{
  "url": "https://www.youtube.com/watch?v=PP1xn5wHtxE"
}
```
json response:
```json
{
    "title": "【第7回MMD杯Ex】 ロード・オブ・ザ・リングでEVERYBODY",
    "description": "Reprint.Original - Original description;いや～ごめんな。Exでなにやればいいのか考えていなかったから、とりあえず本選とぜんぜん関係ないけど、うｐするねｗ あと、始めてPMDEで表情の変更をやってみたが、口わらいや叫びの表情をどうしたらいいのかわ...Video Downlo...",
    "url": "https://www.youtube.com/watch?v=PP1xn5wHtxE",
    "image": "https://i.ytimg.com/vi/PP1xn5wHtxE/hqdefault.jpg"
}
```
