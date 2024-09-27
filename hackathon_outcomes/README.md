# SHS hackathon outcomes

This folder contains the outcomes of the SHS hackathon. The changes were made files under vendor folder as a POC, therefore they are provided in separate folder.

To apply the changes, copy the content of the folder to the vendor folder of the B2B Demo Shop and run the following commands:

```bash
docker/sdk console frontend:zed:build
```

After that, orders table should have additional filter for creation date. Backend part is not yet implemented, so the filter will not work.
