# cd-wordpress
continuous deployment wordpress

TLDR;

```bash
npm install
npm run dev
```

This will continuously deploy on gh-pages using the [diy-pwa/npm-build-2-gh-pages@v1.11](https://github.com/diy-pwa/npm-build-2-gh-pages) plugin. You can also deploy on a cloud provider by running `npm run build`. Your static site will be in the `dist/` folder.

The idea of this is as a consumer of microfrontends. There is an example microfrontend for [paypal standard](https://github.com/diy-pwa/paypal-microfrontend) here.

Have fun composing work from autonomous teams.
