myprompt = input("Enter my own prompt: ")
import replicate
model = replicate.models.get("tommoore515/material_stable_diffusion")
version = model.versions.get("3b5c0242f8925a4ab6c79b4c51e9b4ce6374e9b07b5e8461d89e692fd0faa449")
# output = version.predict(prompt="roasted coffee beans")
output = version.predict(prompt=myprompt)
print(output)