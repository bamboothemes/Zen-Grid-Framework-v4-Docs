---
title: Lazyload
taxonomy:
    category: docs
---



![Lazyload images](/images/documentation/effects/lazyload.jpg)
 
##Lazyload Selector

This options specifies which images to target for lazyloading. You can add multiple selectors separated by a comma.

For example, to target all images on a site you can add the image element `img`. To target only images which have a class of `lazy` you can add `.lazy` or `img.lazy`.

##Disable Lazyload Selector

This option specifies which elements, already targeted with the lazyload selector, to ignore.

For example, you may have the lazyload selector set to `img` to target all images on the site. If there are specific images which you then want to load normally, you could give them a class of `nolazy` and then add `.nolazy` to the disable selector field.

####Disabling lazyload for a module where a class cannot be added to an image.

If you have a module, such as a slideshow or carousel, where lazyloading is causing a problem, you may not always be able to add a class to the image directly.

In this case, you could either use a class which wraps the image in the module output, or use a module class suffix.

For example, if you add a suffix of `nolazy` to a module, you can then target all images within that module by using the selector `.nolazy img`.

Combining that with using the same class directly you can use `.nolazy, .nolazy img`.
