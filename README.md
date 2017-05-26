System/Server Information Helper
--------------------------------

Provides information about your system/server. It automatically detects the type of system that you are using and 
provides you with appropriate information.

Supports
--------

Any contribution helps us to improve [Yii2 System Info](https://github.com/benz3d/yii2-system-info)
 
## Supported OS

- Windows
- Linux

## Methods

- getOS
- getKernelVersion
- getHostname
- getCpuModel
- getCpuVendor
- getCpuFreq
- getCpuArchitecture
- getCpuCores
- getLoad
- getUpTime
- getPhpVersion
- getServerName
- getServerProtocol
- getServerSoftware
- getTotalMemory

## Installation

Either run

```bash
$ php composer.phar require benz3d/yii2-system-info "@dev"
```

Add System-Info to the require section of your **composer.json** file:

```php
{
    "require": {
        "benz3d/yii2-system-info": "@dev"
    }
}
```

And run following command to download extension using **composer**:

```bash
$ php composer.phar update
```

## Usage

```php
use benz3d\systemInfo\SystemInfo;

// Get the class to work with the current operating system
$system = SystemInfo::getInfo();

// Captain Obvious was here
$system::getHostname();
```

## FAQ

#### `COM` not found

From `PHP 5.4.5`, `COM` is no longer built into the php core. You have to add `COM` support in `php.ini`:

```php
[COM_DOT_NET] 
extension=php_com_dotnet.dll 
```

Otherwise you will see this in your error log: `Fatal error: Class \'COM\' not found`

## Contribution

Contributing instructions are located in [CONTRIBUTING.md](CONTRIBUTING.md) file.
