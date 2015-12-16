# Localization Addon for Statamic V1.x
Rudy Affandi
github.com/lesaff/statamic-locale

## Installation
- Copy `_add-ons/locale` to your `_add-ons/locale` folder in your Statamic project
- Copy `_config/add-ons/locale` to your `_config/add-ons/locale` folder in your Statamic project

## Usage
`{{ variable|locale:param1:param2:param3 }}` 
 
**param1:** *localization type*  
Available options: datetime|currency|numeric
Default: datetime
__Note__: currency and numeric are not available for this version. Will be added in future version.

**param2:** *language pack*  
Please consult readme.md on how to check your server to see available language pack on your server
You can use the predefined selection from `default.yaml` and edit it accordingly

**param3:** *custom output format*  
You can use the predefined selection from `default.yaml` and edit it accordingly or if you are using multiple environment, edit the `_config/add-ons/locale/<env.yaml>`

## Example
Assuming that `date` is `1450277942` (Wed, 16 Dec 2015 14:59:03 GMT)  

`{{ date|locale:datetime:french_ca:default }}`

Will output

`16 décembre 2015`


## Setting up your localization table
- edit `default.yaml` in the addon folder or if you are using multiple environment, edit the `_config/add-ons/locale/<env.yaml>`
- update the key: value based on your available language packs
- **Note**: Please be aware that the language pack is case-sensitive, so make sure to copy the name as is.

## How to check your server for available language packs
### POSIX-based OS (*nix, Linux, OSX, BSD)
- ssh to your server
- type `locale -a`

### Windows
- Windows 10: Go to Settings > Time & language > Region & language
- Windows 7: Go to Control Panel > Keyboard and Languages > Install/uninstall languages

### License
The MIT License (MIT)

Copyright (c) 2015 Rudy Affandi

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.