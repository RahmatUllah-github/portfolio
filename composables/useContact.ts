export const useContact = () => {
  const config = useRuntimeConfig()
  const email = config.public.contactEmail as string
  const phone = config.public.contactPhone as string
  const phoneDisplay = config.public.contactPhoneDisplay as string

  return {
    email,
    emailHref: `mailto:${email}`,
    phone,
    phoneDisplay,
    whatsappHref: `https://wa.me/${phone.replace(/\D/g, '')}`,
  }
}
