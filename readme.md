# About

Wolfdown is a simple flat file CMS designed with players of RPGs in mind, although it could honestly be used for any small website project.

# Use

To install, simply drop the directory onto your server. PHP 5+ is the only known requirement, but it's likely to work on older versions.

To add pages, simply create a new file with a `.md` extension in the `content` folder, and it will automagically appear in the navigation. All files are [Markdown](http://daringfireball.net/projects/markdown/) and [Markdown Extra](http://michelf.com/projects/php-markdown/extra/) compaitable. You'll want to go there if you're looking for directions and syntax guides.

Use the `config.php` file to set the title and add links to the navigation.

The Home.markdown file needs to keep its extension so it doesn't show up twice in the navigation (and for other reasons). It also uses the same Markdown formatting; it simply has a different extension.

I've included the [Sass](http://sass-lang.com/) file for those of you who want it, but the CSS file should be more than enough for most users.

Feel free to contact me at <keto@ontheclock.us> with any questions, suggestions, or comments.

# Thanks to

John Gruber of [Daring Fireball](http://daringfireball.net/) for creating Markdown.

Michel Fortin of [Michelf](http://michelf.com/) for creating PHP Markdown Extra.

# Licensing

Copyright (C) 2011 by [ketonereides](https://github.com/ketonereides/)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.