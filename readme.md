translation workflow alfred
===========================

Using [deepL](https://www.deepl.com/translator)


## Supported languages

 - de - german
 - en - english
 - fr - french
 - es - spanish
 - it - italian
 - nl - dutch
 - pl - polish


## How

 1. Download the alfred workflow and install it in alfred 
 2. Type one or two of the supported language abbreviations followed by the words you want to translate
 3. Choose a result and press enter to copy it to your clipboard

For example `it Hello` translates `Hello` to `Ciao`, guessing that `Hello` is english.

In some cases deepL can not figure out the correct source language, therefore
you can specify it as a second parameter.

`en it caldo` translates `caldo` to `warm` - italian to english.


## Attribution

This is heavily influenced by [@psistorm](https://github.com/psistorm)s work
on a similar app that used [leo.org](http://leo.org/) but sadly is deprecated now.

Makes use of:

 - [chriskonnertz/DeepLy](https://github.com/chriskonnertz/DeepLy)
 - [jdfwarrior/Workflows](https://github.com/jdfwarrior/Workflows)


## Disclaimer

This tool uses DeepL's undocumented and unofficial API. The API of DeepL.com is free but this might change in the future.

DeepL is a product from [DeepL GmbH](https://www.deepl.com/publisher.html). 


## License

> The MIT License
> 
> Copyright (C) 2017 Hannes Diercks
> 
> Permission is hereby granted, free of charge, to any person obtaining a copy of
> this software and associated documentation files (the "Software"), to deal in
> the Software without restriction, including without limitation the rights to
> use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
> of the Software, and to permit persons to whom the Software is furnished to do
> so, subject to the following conditions:
> 
> The above copyright notice and this permission notice shall be included in all
> copies or substantial portions of the Software.
> 
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
> IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
> FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
> COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
> IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
> CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
