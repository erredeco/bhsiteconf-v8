RTE.default {
    buttons.link.properties.class.allowedClasses :=addToList(internal-link, internal-link-new-window, download, mail)
    buttons.link.page.properties.class.default = internal-link
    buttons.link.url.properties.class.default = external-link-new-window
    buttons.link.file.properties.class.default = download
    buttons.link.mail.properties.class.default = mail

    proc.allowedClasses :=addToList(internal-link, internal-link-new-window, download, mail)
}