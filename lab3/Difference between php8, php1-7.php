<!-- الفرق بين النسخ الحديده والقديمه في php
1 JIT (Just-In-Time) Compiler:
   - PHP 8 تقدم JIT Compiler لتحسين أداء التطبيقات عن طريق ترجمة الشفرة إلى الآلة مباشرةً.

2 Union Types:
   - في PHP 8، يمكن تحديد أنواع متعددة لمعلمة واحدة، مما يزيد من قوة نظام النوع في اللغة.

3 Named Arguments:
   - توفير إمكانية تمرير الوسائط باستخدام أسمائها، مما يجعل الكود أكثر قراءةً وفهمًا.

4 Match Expression:
   - إضافة تعبير Match الذي يسهل ويجعل أكثر وضوحًا استبدال العديد من السيناريوهات switch الطويلة.

5 Attributes:
   - تقديم السمات لتوسيم الكود ببيانات إضافية مثل الصفات والعلاقات.

6 Constructor Property Promotion:
   - تحسين في تعريف الخصائص في الكونستركتور، مما يقلل من الكود الزائد ويجعله أكثر وضوحًا.

 الإضافات في النسخ السابقة:

- PHP 7.4:
  - خاصية Typed Properties.
  - Arrow Functions.
  - عامل Null Coalescing Assignment (??=).
  - Spread Operator في Arrays.
  - إرجاعات متغايرة ومعاملات متناقضة.

- PHP 7.3:
  - تركيب مرن لصيغ Heredoc و Nowdoc.
  - فاصلة آخر الوسائط في استدعاء الدوال.
  - تعامل مع أخطاء JSON.
  - دالة Is_countable.

- PHP 7.2:
  - تلميح نوع الكائن.
  - تعريفات الأنواع للخصائص.
  - عد الكائنات غير القابلة للعد.
  - تشفير كلمة المرور Argon2.
  - إضافة Sodium.

 
الاضافات الجديده:

1  Union Types (أنواع الاتحاد):

   في PHP 8، يمكن تحديد أنواع متعددة مقبولة لمعلمة واحدة.


   class Number {
       public function __construct(private int|float $number) {}
   }

   // يؤدي التالي إلى TypeError لأن 'NaN' ليس int أو float
   new Number('NaN');


2 Match Expression (تعبير Match):

   تعبير جديد يشبه switch ولكن بإمكانيات أوسع.

    echo match (8.0) {
       '8.0' => "Oh no!",
       8.0 => "This is what I expected",
   };
 
3 Named Arguments (الوسائط المسماة):

   يمكنك تحديد الوسائط باستخدام أسمائها، مما يسهل القراءة والصيانة.

    htmlspecialchars($string, double_encode: false);
 

4 Constructor Property Promotion (ترقية خصائص الكونستركتور):

   تحسين في تعريف الخصائص في الكونستركتور.

    class Point {
       public function __construct(public float $x = 0.0, public float $y = 0.0, public float $z = 0.0) {}
   }
 

5. **Nullsafe Operator (عامل الإمكانية من القيم الفارغة):**

   يسمح بتسلسل من المكالمات دون الحاجة لفحص القيم الفارغة.

 
   $country = $session?->user?->getAddress()?->country; -->
