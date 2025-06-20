# Serial Codec

- [Serial Codec](#serial-codec)
  - [Installation](#installation)
  - [Usage](#usage)

***

## Installation

Install *serial-codec* via Composer:

```bash
composer require ali-eltaweel/serial-codec
```

## Usage

```php
use Codecs\SerialCodec;

$serialCodec = new SerialCodec();

$code = $serialCodec->encode($data);

$data = $serialCodec->decode($code);
```

