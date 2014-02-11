﻿define("ace/mode/sql","require exports module ace/lib/oop ace/mode/text ace/tokenizer ace/mode/sql_highlight_rules ace/range".split(" "),function(a,d){var g=a("../lib/oop"),h=a("./text").Mode,b=a("../tokenizer").Tokenizer,j=a("./sql_highlight_rules").SqlHighlightRules,k=a("../range").Range,i=function(){this.$tokenizer=new b((new j).getRules())};g.inherits(i,h);(function(){this.toggleCommentLines=function(a,b,f,d){for(var e=true,a=/^(\s*)--/,c=f;c<=d;c++)if(!a.test(b.getLine(c))){e=false;break}if(e){e=
new k(0,0,0,0);for(c=f;c<=d;c++){f=b.getLine(c).match(a);e.start.row=c;e.end.row=c;e.end.column=f[0].length;b.replace(e,f[1])}}else b.indentRows(f,d,"--")}}).call(i.prototype);d.Mode=i});
define("ace/mode/sql_highlight_rules",["require","exports","module","ace/lib/oop","ace/mode/text_highlight_rules"],function(a,d){var g=a("../lib/oop"),h=a("./text_highlight_rules").TextHighlightRules,b=function(){this.$rules={start:[{token:"comment",regex:"--.*$"},{token:"string",regex:'".*?"'},{token:"string",regex:"'.*?'"},{token:"constant.numeric",regex:"[+-]?\\d+(?:(?:\\.\\d*)?(?:[eE][+-]?\\d+)?)?\\b"},{token:this.createKeywordMapper({"support.function":"count|min|max|avg|sum|rank|now|coalesce",
keyword:"select|from|where|and|or|group|by|order|limit|offset|having|as|case|when|else|end|type|left|right|join|on|outer|desc|asc","constant.language":"true|false|null"},"identifier",!0),regex:"[a-zA-Z_$][a-zA-Z0-9_$]*\\b"},{token:"keyword.operator",regex:"\\+|\\-|\\/|\\/\\/|%|<@>|@>|<@|&|\\^|~|<|>|<=|=>|==|!=|<>|="},{token:"paren.lparen",regex:"[\\(]"},{token:"paren.rparen",regex:"[\\)]"},{token:"text",regex:"\\s+"}]}};g.inherits(b,h);d.SqlHighlightRules=b});