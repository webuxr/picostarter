---
title: SCSS
description: A place to test SCSS code snippets
#shortcut: 'command+h,ctrl+h'
---

This is a single line of text with some **bold text too**. But the following text is a snippet of SCSS code.

<style>
.main { color:blue; }
.main .look-out { color:red; font-weight:700; }
</style>
<p class="main">
  This is normal text... but <span class="look-out">LOOK OUT</span>! There's <span class="look-out">warning text</span> all over this place.
</p>

```html
<p class="main">
  This is normal text... but <span class="look-out">LOOK OUT</span>! There's <span class="look-out">warning text</span> all over this place.
</p>
```

```css
.main {
  color: blue;

  & .look-out {
    color: red;
    font-weight: 700;
  }
}
```
