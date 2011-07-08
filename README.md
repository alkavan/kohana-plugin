first, download prggmr: https://github.com/prggmrlabs/prggmr, put into application/vendor
add to your bootstrap
```
require_once Kohana::find_file('vendor', 'prggmr/lib/prggmr');
```

now you controller template should extand it like this:
```
abstract class Controller_Template_Site extends Controller_Template_Plugin {}
```