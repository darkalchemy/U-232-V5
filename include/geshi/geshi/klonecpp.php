<?php
/*************************************************************************************
 * klonecpp.php
 * --------
 * Author: AUGER Mickael
 * Copyright: Synchronic
 * Release Version: 1.0.8.3
 * Date Started: 2008/04/16
 *
 * KLone with C++ language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/04/16 (1.0.8)
 *  -  First Release
 *
 * TODO (updated 2008/04/16)
 * -------------------------
 * A tester et a completer si besoin
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = [
    'LANG_NAME' => 'KLone C++',
    'COMMENT_SINGLE' => [1 => '//', 2 => '#'], //#pour precede les include de C
    'COMMENT_MULTI' => ['/*' => '*/', '<!--' => '-->' ], //comentaires C et KLone suivi de ceux pour HTML
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => ["'", '"'],
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => [
        1 => [//mots-cles C++
            'if', 'return', 'while', 'case', 'continue', 'default',
            'do', 'else', 'for', 'switch', 'goto',
            'break', 'true', 'enum', 'extern', 'inline', 'false',
            'errno', 'stdin', 'stdout', 'stderr',
            'virtual', 'public', 'private', 'protected', 'template', 'using', 'namespace',
            'try', 'catch', 'dynamic_cast', 'const_cast', 'reinterpret_cast',
            'static_cast', 'explicit', 'friend', 'typename', 'typeid', 'class',
            'EDOM', 'ERANGE', 'FLT_RADIX', 'FLT_ROUNDS', 'FLT_DIG', 'DBL_DIG', 'LDBL_DIG',
            'FLT_EPSILON', 'DBL_EPSILON', 'LDBL_EPSILON', 'FLT_MANT_DIG', 'DBL_MANT_DIG',
            'LDBL_MANT_DIG', 'FLT_MAX', 'DBL_MAX', 'LDBL_MAX', 'FLT_MAX_EXP', 'DBL_MAX_EXP',
            'LDBL_MAX_EXP', 'FLT_MIN', 'DBL_MIN', 'LDBL_MIN', 'FLT_MIN_EXP', 'DBL_MIN_EXP',
            'LDBL_MIN_EXP', 'CHAR_BIT', 'CHAR_MAX', 'CHAR_MIN', 'SCHAR_MAX', 'SCHAR_MIN',
            'UCHAR_MAX', 'SHRT_MAX', 'SHRT_MIN', 'USHRT_MAX', 'INT_MAX', 'INT_MIN',
            'UINT_MAX', 'LONG_MAX', 'LONG_MIN', 'ULONG_MAX', 'HUGE_VAL', 'SIGABRT',
            'SIGFPE', 'SIGILL', 'SIGINT', 'SIGSEGV', 'SIGTERM', 'SIG_DFL', 'SIG_ERR',
            'SIG_IGN', 'BUFSIZ', 'EOF', 'FILENAME_MAX', 'FOPEN_MAX', 'L_tmpnam', 'NULL',
            'SEEK_CUR', 'SEEK_END', 'SEEK_SET', 'TMP_MAX',
            'EXIT_FAILURE', 'EXIT_SUCCESS', 'RAND_MAX', 'CLOCKS_PER_SEC'
        ],
        2 => [//mots-cles KLone
            'out', 'request', 'response',
        ],
        3 => [//fonctions C++ usuelles
            'cin', 'cerr', 'clog', 'cout', 'delete', 'new', 'this',
            'printf', 'fprintf', 'snprintf', 'sprintf', 'assert',
            'isalnum', 'isalpha', 'isdigit', 'iscntrl', 'isgraph', 'islower', 'isprint',
            'ispunct', 'isspace', 'isupper', 'isxdigit', 'tolower', 'toupper',
            'exp', 'log', 'log10', 'pow', 'sqrt', 'ceil', 'floor', 'fabs', 'ldexp',
            'frexp', 'modf', 'fmod', 'sin', 'cos', 'tan', 'asin', 'acos', 'atan', 'atan2',
            'sinh', 'cosh', 'tanh', 'setjmp', 'longjmp',
            'va_start', 'va_arg', 'va_end', 'offsetof', 'sizeof', 'fopen', 'freopen',
            'fflush', 'fclose', 'remove', 'rename', 'tmpfile', 'tmpname', 'setvbuf',
            'setbuf', 'vfprintf', 'vprintf', 'vsprintf', 'fscanf', 'scanf', 'sscanf',
            'fgetc', 'fgets', 'fputc', 'fputs', 'getc', 'getchar', 'gets', 'putc',
            'putchar', 'puts', 'ungetc', 'fread', 'fwrite', 'fseek', 'ftell', 'rewind',
            'fgetpos', 'fsetpos', 'clearerr', 'feof', 'ferror', 'perror', 'abs', 'labs',
            'div', 'ldiv', 'atof', 'atoi', 'atol', 'strtod', 'strtol', 'strtoul', 'calloc',
            'malloc', 'realloc', 'free', 'abort', 'exit', 'atexit', 'system', 'getenv',
            'bsearch', 'qsort', 'rand', 'srand', 'strcpy', 'strncpy', 'strcat', 'strncat',
            'strcmp', 'strncmp', 'strcoll', 'strchr', 'strrchr', 'strspn', 'strcspn',
            'strpbrk', 'strstr', 'strlen', 'strerror', 'strtok', 'strxfrm', 'memcpy',
            'memmove', 'memcmp', 'memchr', 'memset', 'clock', 'time', 'difftime', 'mktime',
            'asctime', 'ctime', 'gmtime', 'localtime', 'strftime'
        ],
        4 => [//fonctions KLone usuelles
            'request_get_cookies', 'request_get_cookie', 'request_get_args', 'request_get_arg',
            'request_io', 'request_get_uri', 'request_get_filename', 'request_get_query_string', 'request_get_path_info',
            'request_get_if_modified_since', 'request_get_http', 'request_get_client_request',
            'request_get_content_length', 'request_get_uploads', 'request_get_uploaded_file',
            'request_get_method', 'request_get_protocol', 'request_get_resolved_filename',
            'request_get_resolved_path_info', 'request_get_addr', 'request_get_peer_addr',
            'request_get_header', 'request_get_field', 'request_get_field_value',
            'response_set_content_encoding', 'response_disable_caching', 'response_enable_caching',
            'response_set_cookie', 'response_set_method', 'response_get_method',
            'response_print_header', 'response_set_field', 'response_del_field',
            'response_set_content_type', 'response_set_date', 'response_set_last_modified',
            'response_set_content_length', 'response_get_status', 'response_get_header',
            'response_io', 'response_redirect', 'response_set_status',
            'session_get_vars', 'session_get', 'session_set', 'session_age', 'session_clean', 'session_del',
            'io_type', 'io_pipe', 'io_dup', 'io_copy', 'io_seek', 'io_tell', 'io_close',
            'io_free', 'io_read', 'io_printf', 'io_flush', 'io_write', 'io_putc', 'io_getc',
            'io_get_until', 'io_gets', 'io_codec_add_head', 'io_codec_add_tail',
            'io_codecs_remove', 'io_name_set', 'io_name_get'
        ],
        5 => [//types C++
            'auto', 'bool', 'char', 'const', 'double', 'float', 'int', 'long', 'longint',
            'register', 'short', 'shortint', 'signed', 'static', 'struct',
            'typedef', 'union', 'unsigned', 'void', 'volatile', 'jmp_buf',
            'signal', 'raise', 'va_list', 'ptrdiff_t', 'size_t', 'FILE', 'fpos_t',
            'div_t', 'ldiv_t', 'clock_t', 'time_t', 'tm',
            'string', 'wchar_t'
        ],
        6 => [//mots-cles HTML
            'a', 'abbr', 'acronym', 'address', 'applet',

            'base', 'basefont', 'bdo', 'big', 'blockquote', 'body', 'br', 'button', 'b',

            'caption', 'center', 'cite', 'code', 'colgroup', 'col',

            'dd', 'del', 'dfn', 'dir', 'div', 'dl', 'dt',

            'em',

            'fieldset', 'font', 'form', 'frame', 'frameset',

            'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html',

            'iframe', 'ilayer', 'img', 'input', 'ins', 'isindex', 'i',

            'kbd',

            'label', 'legend', 'link', 'li',

            'map', 'meta',

            'noframes', 'noscript',

            'object', 'ol', 'optgroup', 'option',

            'param', 'pre', 'p',

            'q',

            'samp', 'script', 'select', 'small', 'span', 'strike', 'strong', 'style', 'sub', 'sup', 's',

            'table', 'tbody', 'td', 'textarea', 'text', 'tfoot', 'thead', 'th', 'title', 'tr', 'tt',

            'ul', 'u',

            'var',
        ],
        7 => [//autres mots-cles HTML
            'abbr', 'accept-charset', 'accept', 'accesskey', 'action', 'align', 'alink', 'alt', 'archive', 'axis',
            'background', 'bgcolor', 'border',
            'cellpadding', 'cellspacing', 'char', 'charoff', 'charset', 'checked', 'cite', 'class', 'classid', 'clear', 'code', 'codebase', 'codetype', 'color', 'cols', 'colspan', 'compact', 'content', 'coords',
            'data', 'datetime', 'declare', 'defer', 'dir', 'disabled',
            'enctype',
            'face', 'for', 'frame', 'frameborder',
            'headers', 'height', 'href', 'hreflang', 'hspace', 'http-equiv',
            'id', 'ismap',
            'label', 'lang', 'language', 'link', 'longdesc',
            'marginheight', 'marginwidth', 'maxlength', 'media', 'method', 'multiple',
            'name', 'nohref', 'noresize', 'noshade', 'nowrap',
            'object', 'onblur', 'onchange', 'onclick', 'ondblclick', 'onfocus', 'onkeydown', 'onkeypress', 'onkeyup', 'onload', 'onmousedown', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onreset', 'onselect', 'onsubmit', 'onunload',
            'profile', 'prompt',
            'readonly', 'rel', 'rev', 'rowspan', 'rows', 'rules',
            'scheme', 'scope', 'scrolling', 'selected', 'shape', 'size', 'span', 'src', 'standby', 'start', 'style', 'summary',
            'tabindex', 'target', 'text', 'title', 'type',
            'usemap',
            'valign', 'value', 'valuetype', 'version', 'vlink', 'vspace',
            'width'
        ]
    ],
    'SYMBOLS' => [
        1 => [
            '<%=', '<%!', '<%', '%>'
        ],
        0 => [
            '(', ')', '[', ']', '{', '}',
            '!', '%', '&', '|', '/',
            '<', '>',
            '=', '-', '+', '*',
            '.', ':', ',', ';', '^'
        ]
    ],
    'CASE_SENSITIVE' => [
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        7 => false
    ],
    'STYLES' => [
        'KEYWORDS' => [
            1 => 'color: #b1b100; font-weight: bold;', //pour les mots-cles C++
            2 => 'color: #000000; font-weight: bold;', //pour les mots-cles KLone
            3 => 'color: #6600FF;', //pour les fonctions C++
            4 => 'color: #6600FF;', //pour les fonctions Klone
            5 => 'color: #0099FF; font-weight: bold;', //pour les types C++
            6 => 'color: #990099; font-weight: bold;', //pour les mots-cles HTML
            7 => 'color: #000066;'//pour les autres mots-cles HTML
        ],
        'COMMENTS' => [
            1 => 'color: #808080; font-style: italic;', //commentaire sur une ligne C++ et KLone
            2 => 'color: #339933;', //pour les #... en C++
            'MULTI' => 'color: #808080; font-style: italic;'//commentaire sur plusieurs lignes C++ et KLone
        ],
        'ESCAPE_CHAR' => [
            0 => 'color: #000099; font-weight: bold;'
        ],
        'BRACKETS' => [
            0 => 'color: #000000;'
        ],
        'STRINGS' => [
            0 => 'color: #ff0000;'
        ],
        'NUMBERS' => [
            0 => 'color: #cc66cc;'
        ],
        'METHODS' => [
            1 => 'color: #006600;',
            2 => 'color: #006600;'
        ],
        'SYMBOLS' => [
            0 => 'color: #000000;',
            1 => 'color: #000000; font-weight: bold;'
        ],
        'REGEXPS' => [],
        'SCRIPT' => [
            0 => 'background-color:#ffccff; font-weight: bold; color:#000000;',
            1 => '',
            2 => '',
            3 => 'color: #00bbdd; font-weight: bold;',
            4 => 'color: #ddbb00;',
            5 => 'color: #009900;'
        ]
    ],
    'URLS' => [
        1 => '',
        2 => '',
        3 => 'http://www.opengroup.org/onlinepubs/009695399/functions/{FNAMEL}.html',
        4 => 'http://www.koanlogic.com/klone/api/html/globals.html',
        5 => '',
        6 => 'http://december.com/html/4/element/{FNAMEL}.html',
        7 => ''
    ],
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => [
        1 => '.',
        2 => '::'
    ],
    'REGEXPS' => [
    ],
    'STRICT_MODE_APPLIES' => GESHI_ALWAYS,
    'SCRIPT_DELIMITERS' => [
        //delimiteurs pour KLone
        0 => [
            '<%=' => '%>'
        ],
        1 => [
            '<%!' => '%>'
        ],
        2 => [
            '<%' => '%>'
        ],
        //delimiteur pour HTML
        3 => [
            '<!DOCTYPE' => '>'
        ],
        4 => [
            '&' => ';'
        ],
        5 => [
            '<' => '>'
        ]
    ],
    'HIGHLIGHT_STRICT_BLOCK' => [
        0 => false,
        1 => true,
        2 => true,
        3 => false,
        4 => false,
        5 => true
    ],
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => [
        'KEYWORDS' => [
            6 => [
                'DISALLOWED_BEFORE' => '(?<=&lt;|&lt;\/)',
                'DISALLOWED_AFTER' => '(?=\s|\/|&gt;)',
            ],
            7 => [
                'DISALLOWED_AFTER' => '(?=\s*=)',
            ]
        ]
    ]
];
