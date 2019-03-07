---
title: SCSS
description: A place to test SCSS code snippets.
author: Ryan R. Smith
date: 2019-02-27 15:49:00
time: 15:49:00
robots: noindex,nofollow
template: index
#shortcut: 'command+m,ctrl+m'
---

## %meta.title%
This is a single line of text with some **bold text too**. But the following text is a snippet of SCSS code.

<style>
.example { color:blue; }
.example .look-out { color:red; font-weight:700; }
</style>
<p class="example">
  This is normal text... but <span class="look-out">LOOK OUT</span>! There's <span class="look-out">warning text</span> all over this place.
</p>

```html
<p class="example">
  This is normal text... but <span class="look-out">LOOK OUT</span>! There's <span class="look-out">warning text</span> all over this place.
</p>
```

**The following SCSS:**
```css
.example {
  color: blue;

  & .look-out {
    color: red;
    font-weight: 700;
  }
}
```

**...once compiled, will render as:**
```css
.example {
  color: blue;
}
.example .look-out {
  color: red;
  font-weight: 700;
}
```
